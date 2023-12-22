<?php
/**
 * Created by PhpStorm.
 * User: Nam Handsome
 * Date: 11/3/2017
 * Time: 2:50 PM
 */

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $table = 'orders';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        'order_id',
        'user_id',
        'code_sale_id',
        'total_price',
        'shipping_address',
        'shipping_city',
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'status',
        'method_payment',
        'cost_ship',
        'cost_point',
        'cost_sale',
        'ip_customer',
        'visiable',
        'created_at',
        'updated_at'
    ];

    public function orderDetail(){
        return $this->hasMany(OrderItem::class, 'order_id', 'order_id');
    }

    public static function countOrder() {
        $orderItems = session('orderItems');
        $count = 0;
        if($orderItems){
            $count =  count($orderItems);
        }


        return $count;
    }

    public function getOrder($id){
        $order =  Order::with('orderDetail')->where('order_id', $id)->first();

        return $order ;
    }


    public static function getOrderItems() {
        $orderItems = session('orderItems');
        $productIds = array();
        if (!$orderItems){
            return [];
        }

        foreach ($orderItems as $orderItem) {
            $productIds[] = $orderItem['product_id'];
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
            $orderItemDetail[$id]->quantity = $orderItems[$id]['quantity'];
            $orderItemDetail[$id]->size = $orderItems[$id]['size'] ;
        }

        return $orderItemDetail;

    }
}
