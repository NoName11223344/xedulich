@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <div id="content" role="main">
        <section class="section dark" id="section_1825198977">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="banner has-hover" id="banner-527122380">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                            <div id="text-box-422811385"
                                 class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">

                                    <div class="text-inner text-center">

                                        <div id="text-501567665" class="text">

                                            <h1 class="uppercase"><span
                                                        style="font-size: 90%;"> {!! isset($information['tieu-de-1']) ? $information['tieu-de-1'] : 'XE GHÉP – TIỆN CHUYẾN' !!}</span>
                                            </h1>
                                            <h2 class="uppercase"><span
                                                        style="font-size: 80%;">{!! isset($information['tieu-de-2']) ? $information['tieu-de-2'] : 'HÀ NỘI – HẢI PHÒNG – QUẢNG NINH' !!}</span>
                                            </h2>

                                            <style>
                                                #text-501567665 {
                                                    line-height: 3;
                                                }
                                            </style>
                                        </div>

                                        <div id="gap-1670118087" class="gap-element clearfix"
                                             style="display:block; height:auto;">

                                            <style>
                                                #gap-1670118087 {
                                                    padding-top: 30px;
                                                }
                                            </style>
                                        </div>

                                        <a href="tel:0946.755.055" target="_self" class="button success is-larger"
                                           style="border-radius:99px;">
                                            <span>Gọi ngay: {!! isset($information['hotline']) ? $information['hotline'] : '' !!}</span>
                                        </a>

                                    </div>
                                </div>

                                <style>
                                    #text-box-422811385 {
                                        width: 98%;
                                    }

                                    #text-box-422811385 .text {
                                        font-size: 100%;
                                    }

                                    @media (min-width: 550px) {
                                        #text-box-422811385 {
                                            width: 89%;
                                        }
                                    }

                                    @media (min-width: 850px) {
                                        #text-box-422811385 {
                                            width: 60%;
                                        }
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <style>
                        #banner-527122380 {
                            padding-top: 500px;
                        }

                        #banner-527122380 .bg.bg-loaded {
                            background-image: url( {!! isset($information['banner']) ? $information['banner'] : 'site/wp-content/uploads/2022/08/271207519_101455702431579_7778306594524911612_n-1.png' !!});
                        }

                        #banner-527122380 .overlay {
                            background-color: rgba(72, 0, 0, 0.715);
                        }
                    </style>
                </div>


            </div>


            <style>
                #section_1825198977 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background-color: rgb(40, 40, 40);
                }
            </style>
        </section>

        <section class="section" id="section_1585255017">
            <div class="bg section-bg fill bg-fill  bg-loaded">


                <div class="section-bg-overlay absolute fill"></div>


            </div>

            <div class="section-content relative">

                <div class="row row-collapse align-center" id="row-60595998">

                    <div id="col-1064667866" class="col medium-6 small-12 large-6">
                        <div class="col-inner text-center">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1740856702">
                                <div class="img-inner dark" style="margin:-140px 0px -50px 0px;">
                                    <img width="600" height="332"
                                         src="site/wp-content/uploads/2022/08/toyota-vios-2020-98534.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/toyota-vios-2020-98534.png 600w"
                                         sizes="(max-width: 600px) 100vw, 600px"/>
                                </div>

                                <style>
                                    #image_1740856702 {
                                        width: 83%;
                                    }
                                </style>
                            </div>

                        </div>

                        <style>
                            #col-1064667866 > .col-inner {
                                padding: 50px 0px 50px 0px;
                            }
                        </style>
                    </div>


                    <div id="col-901198986" class="col medium-10 small-8 large-10">
                        <div class="col-inner">


                            <div id="gap-870922828" class="gap-element clearfix"
                                 style="display:block; height:auto;">

                                <style>
                                    #gap-870922828 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>

                            <div role="form" class="wpcf7" id="wpcf7-f6469-p6451-o1" lang="vi" dir="ltr">
                                <form action="" method="post" class="wpcf7-form init from-contact">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col medium-3 large-3">
                                            <span class="wpcf7-form-control-wrap"
                                                  data-name="name">
                                                <input type="text" name="name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="✎ Họ &amp; Tên..."/></span>
                                        </div>
                                        <div class="col medium-3 large-3">
                                            <span class="wpcf7-form-control-wrap"
                                                  data-name="phone">
                                                <input type="tel" name="phone" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="☎ Số điện thoại..."/>
                                            </span>
                                        </div>
                                        <div class="col medium-3 large-3">
                                            <span class="wpcf7-form-control-wrap"
                                                  data-name="diem-di">
                                                <input type="text" name="diem-di" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                        placeholder="➥ Điểm đón..."/>
                                            </span>
                                        </div>
                                        <div class="col medium-3 large-3">
                                            <span class="wpcf7-form-control-wrap"
                                                  data-name="diem-den">
                                                <input type="text" name="diem-den" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                        placeholder="➥ Điểm đến..."/>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                    <center>
                                        <button type="button" onclick="return contact(this)" class="wpcf7-form-control has-spinner" style="background: #ff6600; color: #fff">Gửi thông tin</button>
                                    </center>
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                            <div id="gap-633324579" class="gap-element clearfix"
                                 style="display:block; height:auto;">

                                <style>
                                    #gap-633324579 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_1585255017 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background-color: rgb(208, 208, 208);
                }

                #section_1585255017 .section-bg-overlay {
                    background-color: rgba(255, 255, 255, 0.85);
                }
            </style>
        </section>

        <section class="section" id="section_1747002194">
            <div class="bg section-bg fill bg-fill  bg-loaded">


            </div>

            <div class="section-content relative">

                <div class="row row-collapse row-full-width row-dashed" id="row-1840608963">

                    <div id="col-1103501275" class="col medium-3 small-6 large-3">
                        <div class="col-inner">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 150px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="123" height="110"
                                                 src="site/wp-content/uploads/2022/08/icon1.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/icon1.png 123w, wp-content/uploads/2022/08/icon1-24x21.png 24w, wp-content/uploads/2022/08/icon1-36x32.png 36w, wp-content/uploads/2022/08/icon1-48x43.png 48w"
                                                 sizes="(max-width: 123px) 100vw, 123px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Tiết kiệm 50%</h3>
                                    <p>Tiết kiệm được từ 30% đến 50% chi phí</p>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div id="col-2119741870" class="col medium-3 small-6 large-3">
                        <div class="col-inner">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 150px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="123" height="114"
                                                 src="site/wp-content/uploads/2022/08/icon2.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/icon2.png 123w"
                                                 sizes="(max-width: 123px) 100vw, 123px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>GIÁ TRỌN GÓI</h3>
                                    <p>Khách hàng luôn biết trước chi phí trọn gói, không phát sinh cho mỗi chuyến
                                        đi</p>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div id="col-1679489922" class="col medium-3 small-6 large-3">
                        <div class="col-inner">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 150px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="121" height="112"
                                                 src="site/wp-content/uploads/2022/08/icon3.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/icon3.png 121w"
                                                 sizes="(max-width: 121px) 100vw, 121px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>CHẤT LƯỢNG</h3>
                                    <p>Lái xe an toàn và sang trọng hơn</p>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div id="col-1776531068" class="col medium-3 small-6 large-3">
                        <div class="col-inner">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 150px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="91" height="90" src="site/wp-content/uploads/2022/08/icon4.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/icon4.png 91w"
                                                 sizes="(max-width: 91px) 100vw, 91px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>NHANH CHÓNG</h3>
                                    <p>Gọi xe nhanh chóng, di chuyển linh hoạt hơn</p>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
                <div class="is-divider divider clearfix" style="max-width:100%;height:2px;"></div>
            </div>


            <style>
                #section_1747002194 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            </style>
        </section>

        <section class="section" id="section_1515065247">
            <div class="bg section-bg fill bg-fill  bg-loaded">


            </div>

            <div class="section-content relative">

                <div id="text-1807162874" class="text">

                    <h2>CÁC DỊCH VỤ CỦA CHÚNG TÔI</h2>

                    <style>
                        #text-1807162874 {
                            font-size: 0.9rem;
                            text-align: center;
                        }
                    </style>
                </div>

                <div class="text-center">
                    <div class="is-divider divider clearfix"
                         style="max-width:80px;background-color:rgb(255, 43, 43);"></div>
                </div>
                <div class="row" id="row-800835962">

                    <div id="col-1209698958" class="col medium-7 small-12 large-7">
                        <div class="col-inner">


                            <div class="row row-dashed" id="row-135334809">

                                <div id="col-1719945846" class="col medium-6 small-12 large-6">
                                    <div class="col-inner">


                                        <h3 class="uppercase"><i class="fa fa-arrow-circle-right"></i> XE GHÉP, XE
                                            TIỆN CHUYẾN</h3>
                                        <p>Dịch vụ xe ghép, xe tiện chuyến đưa đón tận nơi, giúp khách hàng tiết
                                            kiệm chi phí lên đến 50%.</p>
                                    </div>
                                </div>


                                <div id="col-1040889774" class="col medium-6 small-12 large-6">
                                    <div class="col-inner">


                                        <h3 class="uppercase"><i class="fa fa-arrow-circle-right"></i> XE ĐI SÂN BAY
                                        </h3>
                                        <p>Chúng tôi cung cấp dịch vụ Xe ghép, xe tiện chuyến, xe riêng đi Sân Bay
                                            Nội Bài, dịch vụ taxi nội bài hỗ trợ 24/7.</p>
                                    </div>
                                </div>


                                <div id="col-476942054" class="col medium-6 small-12 large-6">
                                    <div class="col-inner">


                                        <h3 class="uppercase"><i class="fa fa-arrow-circle-right"></i> XE HỢP ĐỒNG
                                        </h3>
                                        <p>Cung cấp dịch vụ xe hợp đồng, xe đường dài, xe du lịch theo các lộ trình
                                            các tỉnh phía Bắc như: Hà Nội, Hải Phòng, Quảng Ninh,&#8230;.</p>
                                    </div>
                                </div>


                                <div id="col-1659204917" class="col medium-6 small-12 large-6">
                                    <div class="col-inner">


                                        <h3 class="uppercase"><i class="fa fa-arrow-circle-right"></i> THUÊ XE HOA
                                        </h3>
                                        <p>Thuê xe hoa theo giờ, theo ngày với chi phí trọn gói. Xe từ phổ thông đến
                                            cao cấp như:Madza 3,Vinfast Lux, Camry, Mercedes,..<br/>
                                            ,&#8230;.</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <div id="col-1457981682" class="col medium-5 small-12 large-5">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_293197559">
                                <div class="img-inner dark">
                                    <img width="888" height="620"
                                         src="site/wp-content/uploads/2022/08/xe-ghep-24-7-888x620.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/xe-ghep-24-7-888x620.png 888w"
                                         sizes="(max-width: 888px) 100vw, 888px"/>
                                </div>

                                <style>
                                    #image_293197559 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_1515065247 {
                    padding-top: 50px;
                    padding-bottom: 50px;
                    background-color: rgb(247, 247, 247);
                }

                @media (min-width: 550px) {
                    #section_1515065247 {
                        padding-top: 50px;
                        padding-bottom: 50px;
                    }
                }
            </style>
        </section>

        <section class="section" id="section_507140000">
            <div class="bg section-bg fill bg-fill  bg-loaded">


            </div>

            <div class="section-content relative">

                <div id="text-2264487226" class="text">

                    <h2>CÁC LOẠI XE ĐƯỢC CUNG CẤP</h2>

                    <style>
                        #text-2264487226 {
                            font-size: 0.9rem;
                            text-align: center;
                        }
                    </style>
                </div>

                <div class="text-center">
                    <div class="is-divider divider clearfix" style="max-width:80px;"></div>
                </div>
                <div class="row row-dashed" id="row-1066854604">

                    <div id="col-1455884903" class="col medium-4 small-12 large-4">
                        <div class="col-inner">


                            <div class="box has-hover   has-hover box-text-bottom">

                                <div class="box-image">
                                    <div class="image-zoom">
                                        <img width="488" height="301"
                                             src="site/wp-content/uploads/2022/08/hyundai-elantra-2020-e1659541264671-488x301.png"
                                             class="attachment-medium size-medium" alt="" loading="lazy"
                                             srcset="site/wp-content/uploads/2022/08/hyundai-elantra-2020-e1659541264671-488x301.png 488w"
                                             sizes="(max-width: 488px) 100vw, 488px"/></div>
                                </div>

                                <div class="box-text text-center">
                                    <div class="box-text-inner">

                                        <h3><span style="font-size: 110%;">Xe 4 chỗ ngồi</span></h3>
                                        <p>Miễn phí khăn và nước.</p>
                                        <p>Phục vụ 24h</p>
                                        <a href="tel:{!! isset($information['hotline']) ? $information['hotline'] : '' !!}"
                                           target="_self"
                                           class="button secondary is-outline">
                                            <span>Gọi: {!! isset($information['hotline']) ? $information['hotline'] : '' !!}</span>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="col-1269348692" class="col medium-4 small-12 large-4">
                        <div class="col-inner">


                            <div class="box has-hover   has-hover box-text-bottom">

                                <div class="box-image">
                                    <div class="image-zoom">
                                        <img width="488" height="301"
                                             src="site/wp-content/uploads/2022/08/toyota-fortuner-2021-63998-488x301.png"
                                             class="attachment-medium size-medium" alt="" loading="lazy"
                                             srcset="site/wp-content/uploads/2022/08/toyota-fortuner-2021-63998-488x301.png 488w"
                                             sizes="(max-width: 488px) 100vw, 488px"/></div>
                                </div>

                                <div class="box-text text-center">
                                    <div class="box-text-inner">

                                        <h3><span style="font-size: 110%;">Xe 7 chỗ ngồi</span></h3>
                                        <p>Miễn phí khăn và nước.</p>
                                        <p>Phục vụ 24h</p>
                                        <a href="tel:{!! isset($information['hotline']) ? $information['hotline'] : '' !!}"
                                           target="_self"
                                           class="button secondary is-outline">
                                            <span>Gọi: {!! isset($information['hotline']) ? $information['hotline'] : '' !!}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="col-1158142113" class="col medium-4 small-12 large-4">
                        <div class="col-inner">


                            <div class="box has-hover   has-hover box-text-bottom">

                                <div class="box-image">
                                    <div class="image-zoom">
                                        <img width="488" height="289"
                                             src="site/wp-content/uploads/2022/08/transit-tieu-chuan-svp-79871644285911-488x289.jpg"
                                             class="attachment-medium size-medium" alt="" loading="lazy"
                                             srcset="site/wp-content/uploads/2022/08/transit-tieu-chuan-svp-79871644285911-488x289.jpg 488w"
                                             sizes="(max-width: 488px) 100vw, 488px"/></div>
                                </div>

                                <div class="box-text text-center">
                                    <div class="box-text-inner">

                                        <h3><span style="font-size: 110%;">Xe 16 chỗ ngồi</span></h3>
                                        <p>Miễn phí khăn và nước.</p>
                                        <p>Phục vụ 24h</p>
                                        <a href="tel:{!! isset($information['hotline']) ? $information['hotline'] : '' !!}"
                                           target="_self"
                                           class="button secondary is-outline">
                                            <span>Gọi: {!! isset($information['hotline']) ? $information['hotline'] : '' !!}</span>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_507140000 {
                    padding-top: 69px;
                    padding-bottom: 69px;
                }
            </style>
        </section>

        <section class="section" id="section_2069819921">
            <div class="bg section-bg fill bg-fill  ">


                <div class="section-bg-overlay absolute fill"></div>


            </div>

            <div class="section-content relative">

                <div class="row row-collapse align-center" id="row-1000467419">

                    <div id="col-1710181424" class="col medium-8 small-12 large-8">
                        <div class="col-inner text-center dark">


                            <div id="text-4068508978" class="text">

                                <h2 class="uppercase">TẠI SAO CHỌN CHÚNG TÔI ?</h2>

                                <style>
                                    #text-4068508978 {
                                        font-size: 0.9rem;
                                        line-height: 1.5;
                                    }
                                </style>
                            </div>

                            <div class="is-divider divider clearfix"
                                 style="max-width:140px;background-color:rgb(255, 255, 255);"></div>
                            <div id="text-3143058776" class="text">

                                <p>Chúng tôi làmột trong những đơn vị cung cấp dịch vụ xe ghép, xe tiện chuyến, xe
                                    đường dài chất lượng, uy tín và giá rẻ nhất tại Hà Nội &#8211; Hải Phòng &#8211;
                                    Quảng Ninh.Chúng tôi tự tin mang đến cho bạn chuyến đi an toàn và thoải mái
                                    nhất.<br/>

                                    <style>
                                        #text-3143058776 {
                                            font-size: 0.9rem;
                                        }
                                    </style>
                            </div>

                        </div>

                        <style>
                            #col-1710181424 > .col-inner {
                                padding: 20px 0px 50px 0px;
                            }

                            @media (min-width: 550px) {
                                #col-1710181424 > .col-inner {
                                    padding: 50px 0px 50px 0px;
                                }
                            }
                        </style>
                    </div>


                </div>
                <div class="row" id="row-855421139">

                    <div id="col-133710515" class="col medium-6 small-12 large-6">
                        <div class="col-inner">


                            <div class="row" id="row-1720581380">

                                <div id="col-788684519" class="col medium-4 small-4 large-4">
                                    <div class="col-inner dark">


                                        <h2>567+</h2>
                                        <div class="is-divider divider clearfix"
                                             style="max-width:50px;background-color:rgb(255, 255, 255);"></div>
                                        <p>Khách hàng</p>
                                    </div>
                                </div>


                                <div id="col-1742903968" class="col medium-4 small-4 large-4">
                                    <div class="col-inner dark">


                                        <h2>110,540+</h2>
                                        <div class="is-divider divider clearfix"
                                             style="max-width:50px;background-color:rgb(255, 255, 255);"></div>
                                        <p>Km di chuyển</p>
                                    </div>
                                </div>


                                <div id="col-1076093007" class="col medium-4 small-4 large-4">
                                    <div class="col-inner dark">


                                        <h2>100%</h2>
                                        <div class="is-divider divider clearfix"
                                             style="max-width:50px;background-color:rgb(255, 255, 255);"></div>
                                        <p>Hài lòng</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_2069819921 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #section_2069819921 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.797);
                }

                #section_2069819921 .section-bg.bg-loaded {
                    background-image: url(site/wp-content/uploads/2022/08/how-to-get-over-road-fear-cover-020820211123-min.jpg);
                }
            </style>
        </section>

        <div class="row align-right" id="row-363367941">

            <div id="col-53060343" class="col medium-6 small-12 large-6">
                <div class="col-inner box-shadow-2 box-shadow-3-hover dark"
                     style="background-color:rgb(240, 88, 41);">


                    <h2>UY TÍN TẠO NIỀM TIN</h2>
                    <p><span style="font-size: 110%;">Với tiêu chí “Sự an toàn của khách hàng là kim chỉ nam của chúng tôi”, Chúng tôi cam kết chất lượng dịch vụ tốt nhất để xây dựng uy tín, niềm tin với mỗi khách hàng</span>
                    </p>
                </div>

                <style>
                    #col-53060343 > .col-inner {
                        padding: 40px 40px 40px 40px;
                        margin: -52px 16px -24px 0px;
                        border-radius: 25px;
                    }

                    @media (min-width: 550px) {
                        #col-53060343 > .col-inner {
                            margin: -175px 0px -80px 0px;
                        }
                    }
                </style>
            </div>


        </div>
        <section class="section" id="section_1980253862">
            <div class="bg section-bg fill bg-fill  bg-loaded">


            </div>

            <div class="section-content relative">

                <div class="row align-middle" id="row-810272419">

                    <div id="col-185186995" class="col medium-5 small-12 large-5">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2040777554">
                                <div class="img-inner image-zoom dark">
                                    <img width="750" height="556"
                                         src="site/wp-content/uploads/2022/08/tong-dai-cskh-min.jpg"
                                         class="attachment-original size-original" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/tong-dai-cskh-min.jpg 750w"
                                         sizes="(max-width: 750px) 100vw, 750px"/>
                                </div>

                                <style>
                                    #image_2040777554 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-1960784710" class="col medium-7 small-12 large-7">
                        <div class="col-inner text-left" style="max-width:100%;">


                            <div id="text-3657739158" class="text">

                                <h2>TỔNG ĐÀI VIÊN NHIỆT TÌNH</h2>
                                <p>Đội ngũ hơn 20 tổng đài viên nhiệt huyết liên tục trực 24/7, đảm bảo chăm sóc
                                    khách hàng một cách tận tình và nhanh chóng nhất.<br/>

                                    <style>
                                        #text-3657739158 {
                                            font-size: 1rem;
                                            line-height: 1.75;
                                            text-align: left;
                                        }
                                    </style>
                            </div>

                            <a href="tel:{!! isset($information['hotline']) ? $information['hotline'] : '' !!}"
                               target="_self" class="button secondary is-underline">
                                <span>Nhận tư vấn ngay</span>
                            </a>

                        </div>

                        <style>
                            #col-1960784710 > .col-inner {
                                padding: 30px 15px 30px 15px;
                            }

                            @media (min-width: 550px) {
                                #col-1960784710 > .col-inner {
                                    padding: 10% 10% 10% 15%;
                                }
                            }
                        </style>
                    </div>


                </div>
            </div>


            <style>
                #section_1980253862 {
                    padding-top: 59px;
                    padding-bottom: 59px;
                }
            </style>
        </section>

        <section class="section" id="section_1967918966">
            <div class="bg section-bg fill bg-fill  bg-loaded">


            </div>

            <div class="section-content relative">

                <div class="row" id="row-1583264564">

                    <div id="col-518393499" class="col medium-3 small-12 large-3">
                        <div class="col-inner">


                            <div id="text-2414251731" class="text">

                                <h2>{!! isset($information['tieu-de-1']) ? $information['tieu-de-1'] : 'XE GHÉP – TIỆN CHUYẾN' !!}</h2>

                                <style>
                                    #text-2414251731 {
                                        text-align: center;
                                    }
                                </style>
                            </div>

                            <div class="text-center">
                                <div class="is-divider divider clearfix"
                                     style="margin-top:1em;margin-bottom:1em;max-width:103px;height:2px;"></div>
                            </div>
                            <div id="text-2890665978" class="text">

                                <h3>{!! isset($information['tieu-de-2']) ? $information['tieu-de-2'] : 'HÀ NỘI &#8211; HẢI PHÒNG &#8211; QUẢNG NINH' !!}</h3>

                                <style>
                                    #text-2890665978 {
                                        text-align: center;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-440179627" class="col medium-9 small-12 large-9">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1967604913">
                                <div class="img-inner image-zoom image-cover dark" style="padding-top:500px;">
                                    <img width="628" height="419"
                                         src="site/wp-content/uploads/2022/08/cho-thue-tai-xe-chuyen-nghiep-min.jpg"
                                         class="attachment-original size-original" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/cho-thue-tai-xe-chuyen-nghiep-min.jpg 628w"
                                         sizes="(max-width: 628px) 100vw, 628px"/>
                                </div>

                                <style>
                                    #image_1967604913 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="row" id="row-1412319765">

                    <div id="col-1037985352" class="col medium-6 small-12 large-6">
                        <div class="col-inner box-shadow-2 box-shadow-3-hover"
                             style="background-color:rgb(255, 255, 255);">


                            <div id="text-3781043099" class="text">

                                <h2 class="uppercase">ĐỘI XE CHUYÊN NGHIỆP</h2>
                                <p>Đội xe của chúng tôi lên đến hơn 300 lái xe chuyên nghiệp được đào tạo bài bản,
                                    tác phong chuyên nghiệp, không quản nắng mưa, đón đưa đúng giờ.<br/>

                                    <style>
                                        #text-3781043099 {
                                            font-size: 0.9rem;
                                        }
                                    </style>
                            </div>

                            <a href="tel:0946.755.055" target="_self" class="button secondary is-underline">
                                <span>GỌI XE NGAY</span>
                            </a>

                        </div>

                        <style>
                            #col-1037985352 > .col-inner {
                                padding: 30px 15px 30px 15px;
                                margin: -150px 0px 0px 0px;
                                border-radius: 20px;
                            }

                            @media (min-width: 550px) {
                                #col-1037985352 > .col-inner {
                                    padding: 40px 40px 40px 40px;
                                }
                            }
                        </style>
                    </div>


                </div>
            </div>


            <style>
                #section_1967918966 {
                    padding-top: 69px;
                    padding-bottom: 69px;
                    background-color: rgb(244, 244, 244);
                }
            </style>
        </section>

        <section class="section" id="section_1013068501">
            <div class="bg section-bg fill bg-fill  ">


                <div class="section-bg-overlay absolute fill"></div>


            </div>

            <div class="section-content relative">

                <div class="row" id="row-426726382">

                    <div id="col-116046239" class="col medium-4 small-12 large-4">
                        <div class="col-inner dark">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 60px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="400" height="400"
                                                 src="site/wp-content/uploads/2022/08/Chat-luong.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/Chat-luong.png 400w"
                                                 sizes="(max-width: 400px) 100vw, 400px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Chất lượng tốt</h3>
                                    <div class="is-divider divider clearfix"
                                         style="max-width:62px;background-color:rgb(255, 255, 255);"></div>
                                    <div id="text-2548195256" class="text">

                                        <p>Chất lượng tốt là yếu tố tiên quyết để chúng tôi phát triển doanh nghiệp
                                            lên tầm cao mới<br/>

                                            <style>
                                                #text-2548195256 {
                                                    text-align: center;
                                                }
                                            </style>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                    <div id="col-237545129" class="col medium-4 small-12 large-4">
                        <div class="col-inner dark">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 60px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="400" height="400"
                                                 src="site/wp-content/uploads/2022/08/icon-dich-vu.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/icon-dich-vu.png 400w"
                                                 sizes="(max-width: 400px) 100vw, 400px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Dịch vụ tốt</h3>
                                    <div class="is-divider divider clearfix"
                                         style="max-width:62px;background-color:rgb(255, 255, 255);"></div>
                                    <div id="text-1031554768" class="text">

                                        <p>Chăm sóc khách hàng tận tình, lái xe đúng giờ là tiêu chí giúp tạo nên
                                            chất lượng dịch vụ tốt.<br/>

                                            <style>
                                                #text-1031554768 {
                                                    text-align: center;
                                                }
                                            </style>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                    <div id="col-699131302" class="col medium-4 small-12 large-4">
                        <div class="col-inner dark">


                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 60px">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img width="400" height="400"
                                                 src="site/wp-content/uploads/2022/08/tiet-kiem.png"
                                                 class="attachment-medium size-medium" alt="" loading="lazy"
                                                 srcset="site/wp-content/uploads/2022/08/tiet-kiem.png 400w"
                                                 sizes="(max-width: 400px) 100vw, 400px"/></div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Giá cả tốt</h3>
                                    <div class="is-divider divider clearfix"
                                         style="max-width:62px;background-color:rgb(255, 255, 255);"></div>
                                    <div id="text-4098368845" class="text">

                                        <p>Mức giá cạnh tranh giúp khách hàng tiết kiệm chi phí cho hành trình di
                                            chuyển của mình.<br/>

                                            <style>
                                                #text-4098368845 {
                                                    text-align: center;
                                                }
                                            </style>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_1013068501 {
                    padding-top: 69px;
                    padding-bottom: 69px;
                }

                #section_1013068501 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.802);
                }

                #section_1013068501 .section-bg.bg-loaded {
                    background-image: url(site/wp-content/uploads/2022/08/tuyen-lai-xe-cho-sep-can-luu-y-gi-3-min.jpg);
                }
            </style>
        </section>

        <section class="section" id="section_1239792636">
            <div class="bg section-bg fill bg-fill  bg-loaded">


            </div>

            <div class="section-content relative">

                <div id="text-3016943874" class="text">

                    <h2 class="uppercase">Khách hàng nói gì về chúng tôi?</h2>
                    <p>Chúng tôi vui mừng khi được 100% khách hàng phản hồi tốt về chất lựng dịch vụ<br/>

                        <style>
                            #text-3016943874 {
                                font-size: 0.9rem;
                                text-align: center;
                            }
                        </style>
                </div>

                <div id="gap-455378341" class="gap-element clearfix" style="display:block; height:auto;">

                    <style>
                        #gap-455378341 {
                            padding-top: 30px;
                        }
                    </style>
                </div>

                <div class="row row-full-width" id="row-714842833">

                    <div id="col-759134868" class="col small-12 large-12">
                        <div class="col-inner">


                            <div class="strong-view strong-view-id-1 default wpmtst-default slider-container carousel slider-mode-horizontal slider-adaptive controls-type-sides-outside controls-style-buttons2"
                                 data-count=3 data-slider-var=strong_slider_id_1 data-state=idle>
                                <div class="strong-content wpmslider-content">
                                    <div class="wpmtst-testimonial testimonial t-slide post-5584">
                                        <div class="wpmtst-testimonial-inner testimonial-inner">
                                            <div data-infinite-loop="true"
                                                 class="wpmtst-testimonial-content testimonial-content">
                                                <div class="wpmtst-testimonial-image testimonial-image"><img
                                                            width="238" height="238"
                                                            src="site/wp-content/uploads/2022/07/133756145_2868455490090849_3780646702442648117_n-398x400-1-238x238.jpg"
                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="site/wp-content/uploads/2022/07/133756145_2868455490090849_3780646702442648117_n-398x400-1-238x238.jpg 238w"
                                                            sizes="(max-width: 238px) 100vw, 238px"/></div>
                                                <div class="maybe-clear"></div>
                                                <p>Chất lượng dịch vụ rất tốt. Mình gọi điện đặt xe chỉ tầm 5 phút
                                                    sau là có xe luôn. Tài xế rất chuyên nghiệp và nhiệt tình.</p>
                                            </div>
                                            <div class="auth-tes">
                                                <div class="wpmtst-testimonial-field testimonial-field testimonial-name">
                                                    Chị Khánh Linh
                                                </div>
                                                <div class="wpmtst-testimonial-field testimonial-field testimonial-company">
                                                    Khách hàng
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="wpmtst-testimonial testimonial t-slide post-6667">
                                        <div class="wpmtst-testimonial-inner testimonial-inner">
                                            <div data-infinite-loop="true"
                                                 class="wpmtst-testimonial-content testimonial-content">
                                                <div class="wpmtst-testimonial-image testimonial-image"><img
                                                            width="238" height="238"
                                                            src="site/wp-content/uploads/2022/08/TS.BS-Thu-Ha-338x400-1-238x238.jpg"
                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="site/wp-content/uploads/2022/08/TS.BS-Thu-Ha-338x400-1-238x238.jpg 238w"
                                                            sizes="(max-width: 238px) 100vw, 238px"/></div>
                                                <div class="maybe-clear"></div>
                                                <p>Xe đi rất êm, không bị xóc. Tôi đi hay bị say xe vì khá nhạy cảm
                                                    với mùi xe. Nhưng đi xe của bên mình thì rất thoáng và sạch.</p>
                                            </div>
                                            <div class="auth-tes">
                                                <div class="wpmtst-testimonial-field testimonial-field testimonial-name">
                                                    Bác Tươi
                                                </div>
                                                <div class="wpmtst-testimonial-field testimonial-field testimonial-company">
                                                    Khách hàng
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="wpmtst-testimonial testimonial t-slide post-6671">
                                        <div class="wpmtst-testimonial-inner testimonial-inner">
                                            <div data-infinite-loop="true"
                                                 class="wpmtst-testimonial-content testimonial-content">
                                                <div class="wpmtst-testimonial-image testimonial-image"><img
                                                            width="238" height="238"
                                                            src="site/wp-content/uploads/2022/08/273426460_4769716553148503_2829990544706134428_n-600x613-1-238x238.jpg"
                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="site/wp-content/uploads/2022/08/273426460_4769716553148503_2829990544706134428_n-600x613-1-238x238.jpg 238w"
                                                            sizes="(max-width: 238px) 100vw, 238px"/></div>
                                                <div class="maybe-clear"></div>
                                                <p>Cả nhà mình thuê xe 16 chỗ của mình về quê. Xe đưa đón rất đúng
                                                    giờ. Tài xế còn giúp chuyển một đống đồ lên xe giúp nhà mình
                                                    (nhà mình về quê mang khá nhiều đồ) Cảm ơn rất nhiều!</p></div>
                                            <div class="auth-tes">
                                                <div class="wpmtst-testimonial-field testimonial-field testimonial-name">
                                                    Anh Bá Nghĩa
                                                </div>
                                                <div class="wpmtst-testimonial-field testimonial-field testimonial-company">
                                                    Khách hàng
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div id="gap-34095599" class="gap-element clearfix" style="display:block; height:auto;">

                    <style>
                        #gap-34095599 {
                            padding-top: 60px;
                        }
                    </style>
                </div>

                <div class="row" id="row-1805298475">

                    <div id="col-527931197" class="col medium-2 small-6 large-2">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1201358583">
                                <div class="img-inner image-overlay-remove dark">
                                    <img width="500" height="300" src="site/wp-content/uploads/2022/08/1-1.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/1-1.png 500w"
                                         sizes="(max-width: 500px) 100vw, 500px"/>
                                    <div class="overlay" style="background-color: rgba(255, 255, 255, 0.558)"></div>

                                </div>

                                <style>
                                    #image_1201358583 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-643326056" class="col medium-2 small-12 large-2">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_255490152">
                                <div class="img-inner image-overlay-remove dark">
                                    <img width="500" height="300" src="site/wp-content/uploads/2022/08/2-1.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/2-1.png 500w"
                                         sizes="(max-width: 500px) 100vw, 500px"/>
                                    <div class="overlay" style="background-color: rgba(255, 255, 255, 0.558)"></div>

                                </div>

                                <style>
                                    #image_255490152 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-55559162" class="col medium-2 small-12 large-2">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1767492798">
                                <div class="img-inner image-overlay-remove dark">
                                    <img width="500" height="300" src="site/wp-content/uploads/2022/08/3-1.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/3-1.png 500w"
                                         sizes="(max-width: 500px) 100vw, 500px"/>
                                    <div class="overlay" style="background-color: rgba(255, 255, 255, 0.558)"></div>

                                </div>

                                <style>
                                    #image_1767492798 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-1505140328" class="col medium-2 small-12 large-2">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_802166303">
                                <div class="img-inner image-overlay-remove dark">
                                    <img width="500" height="300" src="site/wp-content/uploads/2022/08/4.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/4.png 500w"
                                         sizes="(max-width: 500px) 100vw, 500px"/>
                                    <div class="overlay" style="background-color: rgba(255, 255, 255, 0.558)"></div>

                                </div>

                                <style>
                                    #image_802166303 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-1981233211" class="col medium-2 small-12 large-2">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_315262111">
                                <div class="img-inner image-overlay-remove dark">
                                    <img width="500" height="300" src="site/wp-content/uploads/2022/08/5.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/5.png 500w"
                                         sizes="(max-width: 500px) 100vw, 500px"/>
                                    <div class="overlay" style="background-color: rgba(255, 255, 255, 0.558)"></div>

                                </div>

                                <style>
                                    #image_315262111 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-1633642730" class="col medium-2 small-12 large-2">
                        <div class="col-inner">


                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_801174237">
                                <div class="img-inner image-overlay-remove dark">
                                    <img width="500" height="300" src="site/wp-content/uploads/2022/08/6.png"
                                         class="attachment-large size-large" alt="" loading="lazy"
                                         srcset="site/wp-content/uploads/2022/08/6.png 500w"
                                         sizes="(max-width: 500px) 100vw, 500px"/>
                                    <div class="overlay" style="background-color: rgba(255, 255, 255, 0.558)"></div>

                                </div>

                                <style>
                                    #image_801174237 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_1239792636 {
                    padding-top: 69px;
                    padding-bottom: 69px;
                    background-color: rgb(244, 244, 244);
                }
            </style>
        </section>
    </div>
@endsection



