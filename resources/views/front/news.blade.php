@extends('front.layouts.app')
@section('metatitle')
    {{$metatag->news_title}}
@endsection
@section('metadesc')
    {{$metatag->news_desc}}
@endsection
@section('metakeywords')
    {{$metatag->news_keywords}}
@endsection
@section('content')
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 cs-sticky_header">
        <x-header-component />
    </header>

    <!-- End Header Section -->

    <!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg cs-bg-page">
        <div class="container">
            <div class="cs-page_heading_in">
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.news')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="index.html">@lang('website.home')</a>
                    </li>
                    <li class="breadcrumb-item active">@lang('website.newspage')</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_80"></div>
    <!-- End Hero -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12" style="margin-bottom: 30px;">
                    <div class="cs-sidebar_item widget_tag_cloud">
                        <h4 class="cs-sidebar_widget_title">@lang('website.tags')</h4>
                        <div class="tagcloud">
                            @foreach ($tags as $tag)
                            <a href="{{ route('front.newss', $tag->slug) }}" class="tag-cloud-link">{!!$tag->name!!}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-12" style="margin-bottom: 30px;">
                    <div class="cs-sidebar_item widget_search">
                        <h4 class="cs-sidebar_widget_title">@lang('website.search')</h4>
                        <form class="cs-sidebar_search" action="{{route('front.newssearch')}}" method="POST">
                            @csrf
                            <input type="text" name="title" placeholder="@lang('website.search')">
                            <button class="cs-sidebar_search_btn">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4351 10.0629H10.7124L10.4563 9.81589C11.3528 8.77301 11.8925 7.4191 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.4191 11.8925 8.77301 11.3528 9.81589 10.4563L10.0629 10.7124V11.4351L14.6369 16L16 14.6369L11.4351 10.0629ZM5.94625 10.0629C3.66838 10.0629 1.82962 8.22413 1.82962 5.94625C1.82962 3.66838 3.66838 1.82962 5.94625 1.82962C8.22413 1.82962 10.0629 3.66838 10.0629 5.94625C10.0629 8.22413 8.22413 10.0629 5.94625 10.0629Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($newss)>0)
                @foreach ($newss as $news)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" style="margin-bottom: 30px;">
                        <div class="cs-post cs-style2" data-aos="fade-up">
                            <a href="{{route('front.newsDetail',['id'=>$news->id,'slug'=>$news->slug])}}" class="cs-post_thumb cs-radius_15">
                                <img src="{{ $news->image }}" alt="Post" class="w-100 cs-radius_15"
                                    style="height: 450px; object-fit: cover;">
                            </a>
                            <div class="cs-post_info" data-aos="fade-right">

                                <h2 class="cs-post_title">
                                    <a href="{{route('front.newsDetail',['id'=>$news->id,'slug'=>$news->slug])}}">{{ $news->title }}</a>
                                </h2>
                                <div class="cs-post_sub_title">{!! substr($news->desc, 0, 150) !!}</div>
                                <a href="{{route('front.newsDetail',['id'=>$news->id,'slug'=>$news->slug])}}" class="cs-text_btn">
                                    <span>@lang('website.seemore')</span>
                                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                   <div>
                    <h1>Elə bir Xəbər yoxdur</h1>
                    </div>
                @endif

            </div>

        </div>
    </section>

    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
