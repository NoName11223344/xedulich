<footer id="footer" class="footer-wrapper">

    <section class="section tin-ft" id="section_1366574550">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>

        <div class="section-content relative">
            <div id="gap-925729774" class="gap-element clearfix" style="display:block; height:auto;">
                <style>
                    #gap-925729774 {
                        padding-top: 1em;
                    }
                </style>
            </div>
            <div class="container section-title-container"><h3 class="section-title section-title-normal">
                    <b></b><span class="section-title-main" style="font-size:125%;">TIN TỨC NỔI BẬT</span><b></b><a
                            href="{{ asset('/vn/danh-muc/tin-tuc') }}" target="">Xem tất cả<i class="icon-angle-right"></i></a></h3>
            </div>
            <div class="row large-columns-4 medium-columns-2 small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-3-hover">
                @foreach(\App\Entity\Post::newPost('tin-tuc', '8') as $post)
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) }}"
                               class="plain">
                                <div class="box box-shade dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-zoom image-cover" style="padding-top:68%;">
                                            <img width="1280" height="720"
                                                 src="{{ isset($post['image']) ? $post['image'] : asset('site/wp-content/uploads/2022/08/xe-ghep-1_result-1280x720-1.jpg') }}"
                                                 class="attachment-original size-original wp-post-image" alt=""
                                                 loading="lazy"
                                                 srcset="{{ isset($post['image']) ? $post['image'] : asset('site/wp-content/uploads/2022/08/xe-ghep-1_result-1280x720-1.jpg') }} 1280w"
                                                 sizes="(max-width: 1280px) 100vw, 1280px"/>
                                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                                            <div class="shade"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center" style="padding:10px 10px 10px 10px;">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-small ">
                                                {{ isset($post['title']) ? $post['title'] : "" }}</h5>
                                            <div class="is-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <style>
            #section_1366574550 {
                padding-top: 1em;
                padding-bottom: 1em;
                background-color: rgb(255, 255, 255);
            }
        </style>
    </section>

    <section class="section ft dark" id="section_2033299967">
        <div class="bg section-bg fill bg-fill  bg-loaded">


        </div>

        <div class="section-content relative">


            <div class="row" id="row-1477260212">


                <div id="col-1241059945" class="col medium-5 small-12 large-5">
                    <div class="col-inner">


                        <div class="container section-title-container"><h3
                                    class="section-title section-title-normal"><b></b><span
                                        class="section-title-main">XE TIỆN CHUYẾN - XE GHÉP</span><b></b>
                            </h3></div>

                        <p style="margin-bottom: 3px;"><i class="fas fa-phone-alt"></i><strong> Hotline</strong>:
                            {{ isset($information['hotline']) ? $information['hotline'] : '' }}</p>
                        <p style="margin-bottom: 3px;"><i class="fas fa-envelope"></i><strong> Email</strong>:
                            {{ isset($information['email']) ? $information['email'] : '' }} </p>
                        <p style="margin-bottom: 3px;"><i class="fas fa-globe"></i><strong> Website</strong>:
                            {{ \URL::to('/') }}</p>
                        <div id="gap-968941920" class="gap-element clearfix" style="display:block; height:auto;">

                            <style>
                                #gap-968941920 {
                                    padding-top: 15px;
                                }
                            </style>
                        </div>


                        <div class="social-icons share-icons share-row relative full-width text-left">
                            <a href="whatsapp://send?text=Trang%20ch%E1%BB%A7 - "
                               data-action="share/whatsapp/share"
                               class="icon primary button circle tooltip whatsapp show-for-medium"
                               title="Share on WhatsApp"><i class="icon-whatsapp"></i></a>
                            <a href="//www.facebook.com/sharer.php?u=" data-label="Facebook"
                               onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                               rel="noopener noreferrer nofollow" target="_blank"
                               class="icon primary button circle tooltip facebook" title="Share on Facebook"><i
                                        class="icon-facebook"></i></a>
                            <a href="//twitter.com/share?url="
                               onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                               rel="noopener noreferrer nofollow"
                               target="_blank"
                               class="icon primary button circle tooltip twitter"
                               title="Share on Twitter"><i
                                        class="icon-twitter"></i>
                            </a>
                            <a href="mailto:enteryour@addresshere.com?subject=Trang%20ch%E1%BB%A7&amp;body=Check%20this%20out:%20"
                               rel="nofollow" class="icon primary button circle tooltip email"
                               title="Email to a Friend"><i class="icon-envelop"></i>
                            </a>
                            <a href="//pinterest.com/pin/create/button/?url=&amp;media=&amp;description=Trang%20ch%E1%BB%A7"
                               onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                               rel="noopener noreferrer nofollow" target="_blank"
                               class="icon primary button circle tooltip pinterest" title="Pin on Pinterest"><i
                                        class="icon-pinterest"></i>
                            </a>
                            <a href="//www.linkedin.com/shareArticle?mini=true&url=&title=Trang%20ch%E1%BB%A7"
                               onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                               rel="noopener noreferrer nofollow" target="_blank"
                               class="icon primary button circle tooltip linkedin" title="Share on LinkedIn"><i
                                        class="icon-linkedin"></i>
                            </a>
                        </div>


                    </div>
                </div>


                <div id="col-2075563740" class="col medium-3 small-12 large-3">
                    <div class="col-inner">

                        <div class="container section-title-container"><h3
                                    class="section-title section-title-normal"><b></b><span
                                        class="section-title-main">ĐIỀU KHOẢN DỊCH VỤ</span><b></b>
                            </h3>
                        </div>
                        @foreach (\App\Entity\Menu::showWithLocation('menu-footer') as $menu)
                            @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                                <p style="margin-bottom: 3px;"><span style="font-size: 90%;">
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <a href="{{ $menuElement['url'] }}"> 
                                            {{ $menuElement['title_show'] }}
                                        </a>
                                    </span>
                                </p>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div id="col-1633841448" class="col medium-4 small-12 large-4">
                    <div class="col-inner">
                        <div class="container section-title-container"><h3
                                    class="section-title section-title-normal"><b></b><span
                                        class="section-title-main">FANPAGE</span><b></b>
                            </h3></div>

                        {!! isset($information['fanpage']) ? $information['fanpage'] : '' !!}

                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_2033299967 {
                padding-top: 30px;
                padding-bottom: 30px;
                background-color: rgb(239, 95, 0);
            }
        </style>
    </section>
    <div class="absolute-footer dark medium-text-center text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                <div class="copyright-footer">
                    Copyright © 2021 - 2023 <strong>CTY VẬN TẢI & DU LỊCH BAMBO </strong></div>
            </div>
        </div>
    </div>
</footer>
