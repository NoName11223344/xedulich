@extends('admin.layout.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới đặt bàn
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Đặt bàn</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- form start -->
            <form role="form" action="{{ route('book.store') }}" method="POST">
                {!! csrf_field() !!}
                {{ method_field('POST') }}
                <div class="col-xs-12 col-md-6">
    
                    <!-- Nội dung thêm mới -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nội dung</h3>
                        </div>
                        <!-- /.box-header -->

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ và tên</label>
                                    <input type="text" class="form-control" name="name" placeholder="Họ và tên" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điện thoại</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Điện thoại" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                    <input type="number" class="form-control" name="number" placeholder="Số lượng" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đặt cọc</label>
                                    <input type="number" class="form-control" name="prepay" placeholder="Đặt cọc" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" placeholder="Địa chỉ" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời gian tiệc</label>
                                    <input type="text" class="form-control" name="address" id="datepicker" placeholder="Thời gian tiệc" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Message</label>
                                    <textarea rows="4" class="form-control" name="message"
                                              placeholder=""></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chọn nhà hàng</label>
                                    <select class="form-control" name="restaurant">
                                        @foreach (\App\Entity\SubPost::showSubPost('quan-li-dia-diem', 30) as $markTrade)
                                            <option value="{{ $markTrade['dia-chi-nha-hang'] }}">{{ $markTrade->title }}: {{ $markTrade['dia-chi-nha-hang'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group" style="color: red;">
                                    @if ($errors->has('name'))
                                        <label for="exampleInputEmail1">{{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                            </div>
                    </div>
                    <!-- /.box -->

                </div>
            </form>
        </div>
    </section>
@endsection

