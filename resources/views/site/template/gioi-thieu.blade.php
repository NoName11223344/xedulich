@extends('site.layout.site')

@section('title', $category->title)
@section('meta_description',  $category->description )
@section('keywords', '')

@section('content')
    <style>
        .header-nav-main.nav > li > a {
            color: #766969 !important;
        }
        #content{
            padding-top: 90px;
        }
    </style>
    <div id="content" role="main">
        <section class="section" id="section_886186367">
            <div class="bg section-bg fill bg-fill bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row" id="row-1375268188">
                    <div id="col-546168368" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-656697271" class="text">
                                <h2 class="uppercase">
                                    {{ isset($post['title']) ? $post['title'] : 'Giới thiệu' }}
                                </h2>
                                <p>
                                    {!! isset($post['content']) ? $post['content'] : '' !!}
                                </p>
                                <style>
                                    #text-656697271 {
                                        text-align: center;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_886186367 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            </style>
        </section>

        <section class="section has-parallax" id="section_2016638412">
            <div class="bg section-bg fill bg-fill parallax-active bg-loaded" data-parallax-container=".section"
                 data-parallax-background="" data-parallax="-5"
                 style="height: 326.667px; transform: translate3d(0px, -92.3px, 0px); backface-visibility: hidden;">
                <button class="scroll-for-more z-5 icon absolute bottom h-center"><i class="icon-angle-down"
                                                                                     style="font-size:42px;"></i>
                </button>
            </div>

            <div class="section-content relative">

            </div>


            <style>
                #section_2016638412 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    min-height: 330px;
                }

                #section_2016638412 .section-bg.bg-loaded {
                    background-image: url({{ isset($post->image) ? $post->image : asset('site/wp-content/uploads/2022/08/cho-thue-tai-xe-chuyen-nghiep-min.jpg') }});
                }
            </style>
        </section>

        <section class="section" id="section_1967033952">
            <div class="bg section-bg fill bg-fill bg-loaded">


            </div>

            <div class="section-content relative">

                <div class="row" id="row-1726287524">

                    <div id="col-683670388" class="col small-12 large-12">
                        <div class="col-inner">


                            <h3 class="uppercase"> {!!  isset($post['title1']) ? $post['title1'] : ""  !!}<br>
                            </h3>
                            <p>
                                {!!  isset($post['noi-dung-1']) ? $post['noi-dung-1'] : "TẠI SAO NÊN LỰA CHỌN XE TIỆN CHUYẾN" !!}
                            </p>
                        </div>
                    </div>


                </div>
                <div id="gap-842219238" class="gap-element clearfix" style="display:block; height:auto;">

                    <style>
                        #gap-842219238 {
                            padding-top: 30px;
                        }
                    </style>
                </div>

                <div class="row" id="row-646893836">

                    <div id="col-158540996" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <h3 class="uppercase">{{ isset($post['title-2']) ? $post['title-2'] : "Sứ mệnh" }}<br>
                            </h3>
                            <p>{!! isset($post['noi-dung-2']) ? $post['noi-dung-2'] : ""  !!} </p>
                        </div>
                    </div>
                    <div id="col-1544136951" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <h3 class="uppercase">{{ isset($post['title-3']) ? $post['title-3'] : "LIÊN HỆ VỚI CHÚNG TÔI" }}</h3>
                            <p>
                                {!!  isset($post['noi-dung-3']) ? $post['noi-dung-3'] : ""  !!}
                            </p>
                        </div>
                    </div>


                </div>
            </div>


            <style>
                #section_1967033952 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            </style>
        </section>


    </div>
@endsection

