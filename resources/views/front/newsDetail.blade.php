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
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
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
                    <li class="breadcrumb-item active">@lang('website.news')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <!-- End Why Choose -->
    <div class="cs-height_150 cs-height_lg_80"></div>


    <div class="container">
        <div class="cs-portfolio_details">
            <img  style="height: 600px; object-fit: cover;" data-aos="fade-up" src="{{$news->image}}" alt="Image" class="cs-radius_15 w-100">
            <div class="cs-height_90 cs-height_lg_40"></div>
            <div class="cs-post_info" data-aos="fade-right">
                <h2 class="cs-post_title">
                    <a href="#">{!!$news->title!!}</a>
                </h2>
                <div class="cs-post_sub_title">{!!$news->desc!!}</div>

            </div>
        </div>
    </div>
    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />

@endsection
