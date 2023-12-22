@extends('site.layout.site')

@section('title', $category->title)
@section('meta_description',  $category->description )
@section('keywords', '')

@section('content')
    <div id="content" role="main">
        <section class="section" id="section_162879125">
            <div class="bg section-bg fill bg-fill bg-loaded">
                <div class="section-bg-overlay absolute fill"></div>
            </div>
            <div class="section-content relative">
                <div class="banner has-hover" id="banner-1697659928">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill bg-loaded"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                            <div id="text-box-1359537198"
                                 class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">

                                    <div class="text-inner text-center">

                                        <h1 class="uppercase" style="font-size: 35px">
                                            {{ isset($category->title) ? $category->title : 'BẢNG GIÁ XE GHÉP – XE TIỆN CHUYẾN' }}
                                        </h1>
                                        <h2 class="uppercase" style="font-size: 30px">
                                            {{ isset($category->description) ? $category->description : 'HÀ NỘI – HẢI PHÒNG – QUẢNG NINH' }}
                                        </h2>
                                        <div id="gap-1382778701" class="gap-element clearfix"
                                             style="display:block; height:auto;">

                                            <style>
                                                #gap-1382778701 {
                                                    padding-top: 30px;
                                                }
                                            </style>
                                        </div>

                                        <a href="tel:{{ isset($information['hotline']) ? $information['hotline'] : '' }}" target="_self" class="button primary">
                                            <span>Liên hệ: {{ isset($information['hotline']) ? $information['hotline'] : '' }}</span>
                                        </a>

                                    </div>
                                </div>

                                <style>
                                    #text-box-1359537198 {
                                        width: 60%;
                                    }

                                    #text-box-1359537198 .text {
                                        font-size: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>
                    <style>
                        #banner-1697659928 {
                            padding-top: 450px;
                        }

                        #banner-1697659928 .bg.bg-loaded {
                            background-image: url( {{ isset($category->image) ? $category->image : asset('site/wp-content/uploads/2022/08/tuyen-lai-xe-cho-sep-can-luu-y-gi-3-min.jpg') }});
                        }

                        #banner-1697659928 .overlay {
                            background-color: rgba(0, 0, 0, 0.744);
                        }
                    </style>
                </div>
            </div>
            <style>
                #section_162879125 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #section_162879125 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.5);
                }
            </style>
        </section>

        <section class="section" id="section_429146891">
            <div class="bg section-bg fill bg-fill bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row align-middle align-center" id="row-768452168">
                    <div id="col-110850356" class="col medium-7 small-12 large-7">
                        <div class="col-inner text-center">
                            <div id="text-1277086596" class="text">
                                <p><span style="font-size: 110%;">Chúng tôi cung cấp dịch vụ taxi chuyên nghiệp với đa dạng các loại xe 4 chỗ, 7 chỗ, 16 chỗ, taxi tải nhiều tải trọng khác nhau. Đáp ứng tất cả nhu cầu của khách hàng.</span>
                                </p>
                                <style>
                                    #text-1277086596 {
                                        text-align: center;
                                    }
                                </style>
                            </div>

                            <div id="gap-1715015514" class="gap-element clearfix" style="display:block; height:auto;">

                                <style>
                                    #gap-1715015514 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="row row-dashed" id="row-1381723991">
                    @foreach ($products as $id => $product)
                    <div id="col-1681794724{{$id}}" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="icon-box-img">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <img class="alignnone size-full wp-image-6701"
                                         src="{{ route('product', ['post_slug' => $product->slug, 'languageCurrent' => $languageCurrent]) }}"
                                         alt="" width="768" height="413"
                                         srcset="{{ isset($product['image']) ? $product['image'] : asset('site/wp-content/uploads/2022/08/toyota-vios-2020-98534.png') }} 768w"
                                         sizes="(max-width: 768px) 100vw, 768px">
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h2>{{ isset($product['title']) ? $product['title'] : '' }}</h2>
                                <p>{{ isset($product['description']) ? $product['description'] : '' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <style>
                #section_429146891 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            </style>
        </section>
    </div>
@endsection

