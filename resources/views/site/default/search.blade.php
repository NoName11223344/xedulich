@extends('site.layout.site')

@section('title', 'tim-kiem')
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
    <div id="content" class="blog-wrapper blog-archive page-wrapper">
        <header class="archive-page-header">
            <div class="row">
                <div class="large-12 text-center col">
                    <h1 class="page-title is-large uppercase">
                        Tìm kiếm: <span>{{ $request->input('word') }}</span></h1>
                </div>
            </div>
        </header>
        <div class="row row-large row-divided ">
            <div class="large-9 col">
                <div id="row-1056452350{{ rand(1,100) }}"
                     class="row large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-3-hover row-masonry"
                     data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
                    @foreach ($posts as $id => $post)
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) }}" class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56%;">
                                                <img src="{{ isset($post['image']) ? $post['image'] : asset('site/wp-content/uploads/2022/08/xe-ghep-1_result-1280x720-1.jpg') }}"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     loading="lazy"
                                                     srcset="{{ isset($post['image']) ? $post['image'] : asset('site/wp-content/uploads/2022/08/xe-ghep-1_result-1280x720-1.jpg') }} 370w"/>
                                            </div>
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">
                                                    {{ isset($post['title']) ? $post['title'] : '' }}
                                                </h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">
                                                    {{ isset($post['description']) ? \Illuminate\Support\Str::limit($post['description'], '50' ) : '' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="badge absolute top post-date badge-circle-inside">
                                            <div class="badge-inner">
                                                <span class="post-date-day">{{ isset($post->created_at) ? date('d', strtotime($post->created_at)) : date('d') }}</span><br>
                                                <span class="post-date-month is-xsmall">Th{{ isset($post->created_at) ? date('m', strtotime($post->created_at)) : date('m') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="post-sidebar large-3 col">
                <div class="is-sticky-column" style="">
                    <div class="is-sticky-column__inner"
                         style="position: relative; transform: translate3d(0px, 0px, 0px);">
                        <div id="secondary" class="widget-area " role="complementary">

                            <aside id="recent-posts-2" class="widget widget_recent_entries">
                                <span class="widget-title "><span>Bài viết mới</span></span>
                                <div class="is-divider small"></div>
                                <ul>
                                    @foreach(\App\Entity\Post::newPost('tin-tuc', '8') as $post)
                                        <li>
                                            <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) }}">
                                                {{ isset($post['title']) ? $post['title'] : "" }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
