@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <style>
        .header-nav-main.nav > li > a {
            color: #766969 !important;
        }
        #content{
            padding-top: 90px;
        }
    </style>
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">

                    <header class="entry-header">
                        <h1 class="entry-title mb uppercase">Liên hệ</h1>
                    </header>
                    <div id="page-header-829284367" class="page-header-wrapper">
                        <div class="page-title dark featured-title">

                            <div class="page-title-bg">
                                <div class="title-bg fill bg-fill"
                                     data-parallax-container=".page-title"
                                     data-parallax-background
                                     data-parallax="-">
                                </div>
                                <div class="title-overlay fill"></div>
                            </div>

                            <div class="page-title-inner container align-center text-center flex-row-col medium-flex-wrap" >
                                <div class="title-wrapper flex-col">
                                    <h1 class="entry-title mb-0">
                                        Liên hệ          </h1>
                                </div>
                                <div class="title-content flex-col">
                                    <div class="title-breadcrumbs pb-half pt-half"></div>      </div>
                            </div>


                            <style>
                                #page-header-829284367 .page-title-inner {
                                    min-height: 200px;
                                }
                                #page-header-829284367 .title-bg {
                                    background-image: 5332;
                                }
                            </style>
                        </div>
                    </div>

                    <div class="row row-dashed"  id="row-141691655">

                        <div id="col-581317753" class="col medium-6 small-12 large-6"  >
                            <div class="col-inner"  >
                                <div class="container section-title-container" >
                                    <h3 class="section-title section-title-normal"><b></b>
                                        <span class="section-title-main" >
                                            {{ isset($information['tieu-de-1']) ? $information['tieu-de-1'] : "XE TIỆN CHUYẾN - XE GHÉP HÀ NỘI - HẢI PHÒNG - QUẢNG NINH" }}
                                        </span>
                                        <b></b>
                                    </h3>
                                </div>
                                <p style="margin-bottom: 3px;"><i class="fas fa-phone-alt"></i><strong>Hotline</strong>: {{ isset($information['hotline']) ? $information['hotline'] : "" }}</p>
                                <p style="margin-bottom: 3px;"><i class="fas fa-envelope"></i> <strong>Email</strong>: {{ isset($information['email']) ? $information['email'] : "" }}</p>
                                <p style="margin-bottom: 3px;"><i class="fas fa-globe"></i> <strong>Website</strong>: {{ \URL::to('/') }}</p>
                            </div>
                        </div>



                        <div id="col-2033184763" class="col medium-6 small-12 large-6"  >
                            <div class="col-inner text-center"  >
                                <div class="container section-title-container" ><h3 class="section-title section-title-normal"><b></b><span class="section-title-main" >LIÊN HỆ VỚI CHÚNG TÔI QUA BIỂU MẪU DƯỚI ĐÂY</span><b></b></h3></div>
                                <div role="form" class="wpcf7" id="wpcf7-f6564-p6562-o1" lang="vi" dir="ltr">
                                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                    <form action="" method="post" class="wpcf7-form init from-contact" novalidate="novalidate" data-status="init">
                                        {!! csrf_field() !!}
                                        <p><label>Nội dung mà bạn muốn làm việc cùng chúng tôi? </label><br />
                                            <span class="wpcf7-form-control-wrap" data-name="noi-dung">
                                                <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required">
                                                    <span class="wpcf7-list-item first">
                                                        <input type="checkbox" name="message[]" value="Đặt xe" />
                                                        <span class="wpcf7-list-item-label">Đặt xe</span>
                                                    </span><span class="wpcf7-list-item">
                                                        <input type="checkbox" name="message[]" value="Báo giá" />
                                                        <span class="wpcf7-list-item-label">Báo giá</span></span>
                                                    <span class="wpcf7-list-item">
                                                        <input type="checkbox" name="message[]" value="Tư vấn dịch vụ" />
                                                        <span class="wpcf7-list-item-label">Tư vấn dịch vụ</span>
                                                    </span><span class="wpcf7-list-item last">
                                                        <input type="checkbox" name="message[]" value="Khác" />
                                                        <span class="wpcf7-list-item-label">Khác</span>
                                                    </span>
                                                </span>
                                            </span><br/>
                                        <hr />
                                        <hr />
                                        <div class="row"  id="row-1128163584"><br />
                                            <div id="col-1378477199" class="col medium-4 small-12 large-4"  >
                                                <div class="col-inner"  >
                                                    <span class="wpcf7-form-control-wrap" data-name="name">
                                                        <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên . . ." /></span><br />
                                                </div>
                                            </div>
                                            <div id="col-1509986291" class="col medium-4 small-12 large-4"  >
                                                <div class="col-inner"  >
                                                    <span class="wpcf7-form-control-wrap" data-name="email">
                                                        <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Địa chỉ Email . . ." /></span><br />
                                                </div>
                                            </div>
                                            <div id="col-1840373906" class="col medium-4 small-12 large-4"  >
                                                <div class="col-inner"  >
                                                    <span class="wpcf7-form-control-wrap" data-name="phone">
                                                        <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Số điện thoại . . ." /></span><br />
                                                </div>
                                            </div>
                                            <div id="col-922182628" class="col medium-12 small-12 large-12"  >
                                                <div class="col-inner"  >
                                                    <span class="wpcf7-form-control-wrap" data-name="message">
                                                        <input type="text" name="message[]" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Ghi chú . . ." /></span><br />
                                                </div>
                                            </div>
                                            <p>
                                        </div>
                                        <br/>
                                        <button type="button" onclick="return contact(this)" class="wpcf7-form-control has-spinner wpcf7-submit"  style="background: #ff6600; color: #fff">GỬI ĐI</button>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
