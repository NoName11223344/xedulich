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
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    <header class="entry-header">
                        <h1 class="entry-title mb uppercase">{{ isset($post['title']) ? $post['title'] : '' }}</h1>
                    </header>
                    {!! isset($post['content']) ? $post['content'] : '' !!}
                </div>
            </div>
        </div>
    </div>
@endsection

