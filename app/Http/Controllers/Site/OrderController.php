<?php
/**
 * Created by PhpStorm.
 * User: Nam Handsome
 * Date: 11/4/2017
 * Time: 4:40 PM
 */

namespace App\Http\Controllers\Site;


use App\Entity\Input;
use App\Entity\Order;
use App\Entity\OrderBank;
use App\Entity\OrderCodeSale;
use App\Entity\OrderItem;
use App\Entity\OrderShip;
use App\Entity\Post;
use App\Entity\SettingOrder;
use App\Entity\User;
use App\Mail\Mail;
use App\Ultility\Ultility;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Validator;

class OrderController extends SiteController
{
    /*===== thanh toán =====*/
   public function order(Request $request) {
       $quantities = $request->input('quantity');
       $productIds = $request->input('product_id');
//       $request->session()->pull('orderItems');

       if (Auth::check()) {
           $user = Auth::user();
           $userId = $user->id;
           $point = $user->point;
       } else {
           $point = null;
       }

       $orderShips = OrderShip::get();
       $orderItems = Order::getOrderItems();
       $orderBanks = OrderBank::get();

       return view('site.order.index', compact(
           'orderItems',
           'point',
           'orderShips',
           'orderBanks'
           ));
   }

   /* ===== add to cart ======*/
   public function addToCart(Request $request) {

       if (empty($request->input('quantity')) || empty($request->input('product_id'))) {

           return response('Error', 404)
               ->header('Content-Type', 'text/plain');
       }

       $quantities = $request->input('quantity');
       $productIds = $request->input('product_id');
       $productSize = $request->input('size');

       $insertOrder = $this->insertOrder($request, $productIds, $quantities,$productSize);
       $orderItems = $this->productAddToCart($request, $productIds);

       return response([
           'status' => 200,
           'orderItems' => $orderItems,
           'quantities' =>  $quantities,
           'size' =>  $productSize
       ])->header('Content-Type', 'text/plain');
       
   }
    private function productAddToCart($request, $productIds) {
        $orderItemDetail = Post::join('products', 'products.post_id', '=', 'posts.post_id')
            ->whereIn('products.product_id', $productIds)->get();
        
        return $orderItemDetail;

    }

    public function updateOrder(Request $request){
        session_start();
        $orderItems = session('orderItems');
        $productId = $request->id;
        $quantity = $request->quantity;
        if (!$orderItems){
            return [];
        }
        $orderItemNew = $request->cart;

        //xóa session cũ
        Session::forget('orderItems');
        //Thêm session mới lại
        Session::put('orderItems', $orderItemNew);
    }


    private function insertOrder($request, $productIds, $quantities, $productSize) {
        // update order new;
        $orderNew = array();
        $statusUpdate = array();
        foreach($productIds as $id => $productId) {
            $orderNew[$productId]['size'] = $productSize[$id];
            $orderNew[$productId]['product_id'] = $productId;
            $orderNew[$productId]['quantity'] = $quantities[$id];
            $statusUpdate[$productId] = false;
        }

        if($request->session()->has('orderItems')) {
            $orderItemOlds = $request->session()->pull('orderItems');
            foreach ($orderItemOlds as $orderItemOld) {
                if (isset($orderNew[$orderItemOld['product_id']])) {
                    $orderItem = [
                        'quantity' => ($orderItemOld['quantity'] + $orderItemOld['quantity']),
                        'product_id' => $orderItemOld['product_id'],
                        'size' => $orderItemOld['size'],
                    ];
                    $request->session()->push('orderItems', $orderItem);
                    $statusUpdate[$orderItemOld['product_id']] = true;
                    continue;
                }

                $request->session()->push('orderItems', $orderItemOld);
            }
        }


        foreach ($orderNew as $productId => $item) {
            if(!$statusUpdate[$productId]) {
                $orderItem = [
                    'quantity' => $item['quantity'],
                    'product_id' => $productId,
                    'size' => $item['size'],
                ];
            $request->session()->push('orderItems', $orderItem);
            }
        }
    }

    public function deleteItemCart(Request $request) {
       $productId = $request->input('product_id');

       if($request->session()->has('orderItems')) {
           $orderItemOlds = $request->session()->pull('orderItems');

           foreach ($orderItemOlds as $orderItemOld) {
               if ($productId != $orderItemOld['product_id']) {
                   $request->session()->push('orderItems', $orderItemOld);
               }
           }
       }
       
       return response([
           'status' => 200,
       ])->header('Content-Type', 'text/plain');
   }

   private function computePrice() {
       $orderItems = Order::getOrderItems();
       
       $totalPrice = 0;
       foreach ($orderItems as $orderItem) {
           if (!empty($orderItem->discount)) {
               $totalPrice += $orderItem->discount*$orderItem->quantity;
           } else {
               $totalPrice += $orderItem->price*$orderItem->quantity;
           }

       }

       return $totalPrice;
   }
   private function getCodeSalePrice(Request $request, $totalPrice) {
       $oldCodeSale = $request->input('code_sale');

       $codeSale = OrderCodeSale::where('code', $oldCodeSale)
           ->where('many_use', '>', 0)
           ->where('start', '<=', new \DateTime())
           ->where('end', '>=', new \DateTime())
           ->first();

       if (empty($codeSale)) {
           return 0;
       }

       if ($codeSale->method_sale == 0) {
           return $codeSale->sale;
       }

       return ($totalPrice*$codeSale->sale)/100;
   }
   private function getPointGive(Request $request) {
       $oldIsUserPoint = $request->input('is_use_point');
       if ($oldIsUserPoint != 1) {
           return 0;
       }
       if (!Auth::check()) {
           return 0;
       }
       $point = Auth::user()->point;
       $settingOrder = SettingOrder::first();

       return $point*$settingOrder->point_to_currency;
   }
   private function getCostShip(Request $request) {
       $oldMethodShip = $request->input('method_ship');
       $orderShip = OrderShip::where('order_ship_id', $oldMethodShip)->first();
       
       return $orderShip->cost;
   }

   public function checkout(Request $request){
       $orderItems = session('orderItems');
       if (empty($orderItems)){
           return redirect('/');
       }

       $productIds = array();
       if (!$orderItems){
           return [];
       }
       $productItem = array();

       foreach ($orderItems as $orderItem) {
           $productIds[] = $orderItem['product_id'];
           $productItem[$orderItem['product_id']] = $orderItem;
       }

       $orderItemDetail = Post::join('products', 'products.post_id', '=', 'posts.post_id')
           ->select(
               'products.product_id',
               'posts.*',
               'products.price',
               'products.discount'
           )
           ->whereIn('products.product_id', $productIds)
           ->get();

       foreach ($orderItemDetail as $id => $orderItem ) {
           foreach ($orderItems as $item){
                if ($orderItem['product_id'] == $item['product_id']){
                    $orderItem->quantity = $item['quantity'];
                    $orderItem->size = $item['size'];
                }
           }
       }

       $orderItems = $orderItemDetail;

       return view('site.order.checkout', compact('orderItems'));
   }

   public function send(Request $request){
       // tính tổng tiền phải trả
       $totalPrice = $this->computePrice();
       // lấy ra mã giảm giá
       $codeSalePrice = $this->getCodeSalePrice($request, $totalPrice);
       // lấy ra tiền tương ứng với điểm thưởng
       $pointGive = $this->getPointGive($request);
       // lấy ra chi phí ship
//       $costShip = $this->getCostShip($request);
       // hình thức thanh toán
       $methodPayment = $request->session()->get('method_payment', '');
       // information customer
       $name = $request->input('first_name') . " " . $request->input('last_name');
       $customer = [
           'ship_name' => $name,
           'ship_email' => $request->input('shipping_email'),
           'ship_phone' => $request->input('shipping_phone'),
           'ship_address' => $request->input('ship_address'),
       ];
       // thêm mới thông tin đơn hàng.
       if(Auth::check()) {
           $userId = Auth::user()->id;
       } else {
           $userId = 0;
       }
       $costShip = 0;
       $order = new Order();
       $orderId = $order->insertGetId([
           'status' => '1', // trang thai đặt hàng thành công
           'shipping_name' => $name,
           'ship_country' => $request->input('ship_country'),
           'shipping_city' => $request->input('shipping_city'),
           'shipping_email' => $request->input('shipping_email'),
           'shipping_phone' => $request->input('shipping_phone'),
           'shipping_address' => $request->input('shipping_address'),
           'currency' => $request->input('currency') ?? '',
           'zip_code' => $request->input('zip_code') ?? '',
           'total_price' => ($totalPrice + $costShip - $codeSalePrice - $pointGive),
           'method_payment' =>  $methodPayment,
           'cost_ship' => $costShip,
           'cost_point' => $pointGive,
           'cost_sale' => $codeSalePrice,
           'ip_customer' => Ultility::get_client_ip(),
           'created_at' =>   new \DateTime(),
           'updated_at' =>   new \DateTime(),
           'user_id' => $userId
       ]);

       // insert order item
       $orderItems = Order::getOrderItems();
       foreach($orderItems as $orderItem) {
           OrderItem::insert([
               'product_id' => $orderItem->product_id,
               'size' => $orderItem->size,
               'price' => $orderItem->price,
               'quantity' => $orderItem->quantity,
               'order_id' => $orderId,
               'currency' => isset($request->currency) ? $request->currency : '',
           ]);
       }
       // minus point user
       $this->minusPointUser( $request);
       // minus many use code_sale
       $this->minusManyCodeSale($request);
       $now = date_create("2013-03-15");
       $now =  date_format($now,"d/m/Y H:i:s");
       // send mail to admin
//       $this->sendMailAdmin(
//           $now,
//           '#'.$orderId,
//           $orderItems,
//           $request->input('ship_name'),
//           $request->input('ship_address'),
//           $request->input('ship_email'),
//           $request->input('ship_phone')
//           );
//       // send mail to customer
//       $this->sendMailCustomer(
//           $now,
//           '#'.$orderId,
//           $orderItems,
//           $request->input('ship_name'),
//           $request->input('ship_address'),
//           $request->input('ship_email'),
//           $request->input('ship_phone')
//       );
       // giải phóng session
//       $request->session()->pull('orderItems');
       $orderBanks = OrderBank::get();
       return redirect()->route('review', ['id' => $orderId]);

//           view('site.order.payment', compact(
//           'orderId',
//           'orderItems',
//           'codeSalePrice',
//           'pointGive',
//           'costShip',
//           'totalPrice',
//           'customer',
//           'orderBanks'
//       ));
   }

   public function cbOrder(Request $request){
       $orderItems = Order::getOrderItems();
       $request->session()->pull('orderItems');
       $orderBanks = OrderBank::get();
        if (!$orderItems){
            return redirect('/');
        }

       return view('site.order.payment', compact('orderItems', 'orderBanks'));
   }

    public function review($id){
        $order = new Order();
        $order = $order->getOrder($id);

        return view('site.order.review', compact('order'));
    }

    private function minusPointUser(Request $request) {
        $oldIsUserPoint = $request->input('is_use_point');
        if ($oldIsUserPoint == 1) {
            $user = Auth::user();
            User::where('id', $user->id)->update([
                'point' => 0
            ]);
        }
    }
    private function minusManyCodeSale(Request $request) {
        $oldCodeSale = $request->session()->get('code_sale');

        $codeSale = OrderCodeSale::where('code', $oldCodeSale)
            ->where('many_use', '>', 0)
            ->where('start', '<=', new \DateTime())
            ->where('end', '>=', new \DateTime())
            ->first();

        if (!empty($codeSale)) {
            $codeSale->update([
                'many_use' => $codeSale->many_use-1
            ]);
        }

    }
    protected function sendMailAdmin($orderTime, $codeOrder, $orderItems, $shippingName, $shippingAddress, $shippingEmail, $shippingPhone) {
        $mailConfig = Post::join('sub_post', 'sub_post.post_id', '=', 'posts.post_id')
            ->select('posts.*')
            ->where('type_sub_post_slug', 'cau-hinh-email')
            ->where('posts.slug', 'mail-dat-hang-cho-nguoi-quan-tri')
            ->first();
        // config content
        $mailConfig->content = str_replace('[order-time]', $orderTime, $mailConfig->content);
        $mailConfig->content = str_replace('[code-order]', $codeOrder, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-name]', $shippingName, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-address]', $shippingAddress, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-phone]', $shippingPhone, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-email]', $shippingEmail, $mailConfig->content);

        $inputs = Input::where('post_id', $mailConfig->post_id)->get();
        foreach ($inputs as $input) {
            $mailConfig[$input->type_input_slug] = $input->content;
            // config to, from, subject
            $mailConfig[$input->type_input_slug] = str_replace('[user-email]', $shippingEmail, $mailConfig[$input->type_input_slug]);
            $mailConfig[$input->type_input_slug] = str_replace('[shipping-email]', $shippingEmail,  $mailConfig[$input->type_input_slug]);
        }
        // thong tin don hang
        $inforOrder = '';
        foreach($orderItems as $id => $orderItem) {
            $inforOrder .= sprintf('<p>%u. %s sản phẩm %s, đơn giá: %s </p>',
                ($id+1),
                $orderItem->quantity,
                $orderItem->title,
                $orderItem->price
                );
        }
        $mailConfig->content = str_replace('[bang-thong-tin-don-hang]', $inforOrder, $mailConfig->content);

        $to =  $mailConfig['to'];
        $from = $mailConfig['from'];
        $subject = $mailConfig['chu-de-(subject)'];
        $content = $mailConfig->content;
        $mail = new Mail(
            $content
        );

        \Mail::to($to)->send($mail->from($from)->subject($subject));
    }

    protected function sendMailCustomer($orderTime, $codeOrder, $orderItems, $shippingName, $shippingAddress, $shippingEmail, $shippingPhone) {
        $mailConfig = Post::join('sub_post', 'sub_post.post_id', '=', 'posts.post_id')
            ->select('posts.*')
            ->where('type_sub_post_slug', 'cau-hinh-email')
            ->where('posts.slug', 'mail-cho-nguoi-dat-hang')
            ->first();
        // config content
        $mailConfig->content = str_replace('[user-name]', $shippingName, $mailConfig->content);
        $mailConfig->content = str_replace('[user-email]', $shippingEmail, $mailConfig->content);
        $mailConfig->content = str_replace('[order-time]', $orderTime, $mailConfig->content);
        $mailConfig->content = str_replace('[code-order]', $codeOrder, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-name]', $shippingName, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-address]', $shippingAddress, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-phone]', $shippingPhone, $mailConfig->content);
        $mailConfig->content = str_replace('[shipping-email]', $shippingEmail, $mailConfig->content);

        $inputs = Input::where('post_id', $mailConfig->post_id)->get();
        foreach ($inputs as $input) {
            $mailConfig[$input->type_input_slug] = $input->content;
            // config to, from, subject
            $mailConfig[$input->type_input_slug] = str_replace('[user-email]', $shippingEmail, $mailConfig[$input->type_input_slug]);
            $mailConfig[$input->type_input_slug] = str_replace('[shipping-email]', $shippingEmail,  $mailConfig[$input->type_input_slug]);
        }

        // thong tin don hang
        $inforOrder = '';
        foreach($orderItems as $id => $orderItem) {
            $inforOrder .= sprintf('<p>%u. %s sản phẩm %s, đơn giá: %s </p>',
                ($id+1),
                $orderItem->quantity,
                $orderItem->title,
                $orderItem->price
            );;
        }
        $mailConfig->content = str_replace('[bang-thong-tin-don-hang]', $inforOrder, $mailConfig->content);

        $to =  $mailConfig['to'];
        $from = $mailConfig['from'];
        $subject = $mailConfig['chu-de-(subject)'];
        $content = $mailConfig->content;
        $mail = new Mail(
            $content
        );

        \Mail::to($to)->send($mail->from($from)->subject($subject));
    }
}
