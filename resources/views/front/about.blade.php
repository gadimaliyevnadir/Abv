@extends('front.layouts.app')
@section('metatitle')
    {{$metatag->about_title}}
@endsection
@section('metadesc')
    {{$metatag->about_desc}}
@endsection
@section('metakeywords')
    {{$metatag->about_keywords}}
@endsection
@section('content')
        <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
        <x-header-component />
    </header>
    <!-- End Header Section -->
    <!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg cs-bg-page">
        <div class="container">
            <div class="cs-page_heading_in">
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.aboutus')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="index.html">@lang('website.home')</a>
                    </li>
                    <li class="breadcrumb-item active">@lang('website.aboutus')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-7" data-aos="fade-right">
                    <div class="cs-section_heading cs-style1">
                        {{-- <h3 class="cs-section_subtitle">{{$about->subtitle}}</h3> --}}
                        <h2 class="cs-section_title">{{$about->title}}</h2>
                        <div class="cs-height_30 cs-height_lg_20"></div>
                        <p class="cs-m0">{{$about->desc}}</p>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                        <div class="cs-separator cs-accent_bg"></div>
                        <div class="cs-height_25 cs-height_lg_40"></div>
                    </div>
                </div>
                <div class="col-lg-5 offset-xl-2" data-aos="fade-left">
                    <img src="{{$about->image1}}" alt="Thumb" class="w-100 cs-radius_15">
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-7" data-aos="fade-right">
                    <img src="{{$about->image2}}" alt="Thumb" class="w-100 cs-radius_15">
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="{{$about->image3}}" alt="Thumb" class="w-100 cs-radius_15">
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="cs-height_75 cs-height_210"></div>
    <!-- Start FunFact -->
    <x-funfact-component/>
    <!-- End FunFact -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <x-missia-component/>
    <div class="cs-height_130 cs-height_lg_70"></div>

    <!-- Start CTA -->
    <x-footcontact-component />
    <!-- End CTA -->
@endsection
