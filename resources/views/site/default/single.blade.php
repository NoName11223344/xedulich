@extends('site.layout.site')

@section('title', !empty($post->meta_title) ? $post->meta_title : $post->title)
@section('meta_description',  !empty($post->meta_description) ? $post->meta_description : $post->description)
@section('keywords', $post->meta_keyword )
@section('meta_image', asset($post->image) )
@section('meta_url', route('post', ['cate_slug' => $category->slug, 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) )

@section('content')
    <div class="page-title blog-featured-title featured-title no-overflow">

        <div class="page-title-bg fill">
            <div class="title-bg fill bg-fill bg-top parallax-active"
                 style="background-image: url({{ isset($post->image) ? $post->image : asset('/site/wp-content/uploads/2022/08/ee760d1c1474fde7f8f71a96b2452e29_S.jpg') }}); height: 302.222px; transform: translate3d(0px, 17.44px, 0px); backface-visibility: hidden;"
                 data-parallax-fade="true" data-parallax="-2" data-parallax-background=""
                 data-parallax-container=".page-title"></div>
            <div class="title-overlay fill" style="background-color: rgba(0,0,0,.5)"></div>
        </div>

        <div class="page-title-inner container  flex-row  dark is-large" style="min-height: 300px">
            <div class="flex-col flex-center text-center">
                <h6 class="entry-category is-xsmall">
                    <a href="http://xetienchuyenhaiphongquangninh.vn/tin-tuc/" rel="category tag">
                        {{ isset($category['title']) ? $category['title'] : 'Tin tức' }}
                    </a></h6>

                <h1 class="entry-title">
                    {{ isset($post['title']) ? $post['title'] : '' }}
                </h1>
                <div class="entry-divider is-divider small"></div>

            </div>
        </div>
    </div>
    <main id="main" class="">

        <div id="content" class="blog-wrapper blog-single page-wrapper">

            <div class="row align-center">
                <div class="large-10 col">
                    <article id="post-6616"
                             class="post-6616 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                        <div class="article-inner has-shadow box-shadow-1 box-shadow-3-hover">
                            <div class="entry-content single-page">
                                {!! isset($post['content']) ? $post['content'] : '' !!}
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection

