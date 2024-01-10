@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->team_title }}
@endsection
@section('metadesc')
    {{ $metatag->team_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->team_keywords }}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">Team Details</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Team Details</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <!-- End Why Choose -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <!-- Start Team Section -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6" data-aos="flip-left">
                    <img src="{{ $team->image }}" alt="Member" class="cs-radius_15 w-100">
                </div>
                <div class="col-lg-6 offset-xl-1" data-aos="flip-right">
                    <div class="cs-height_0 cs-height_lg_45"></div>
                    <div class="cs-section_heading cs-style1">
                        <h2 class="cs-section_title">{{ $team->title }}</h2>
                        <div class="cs-height_10 cs-height_lg_10"></div>
                        <h3 class="cs-section_subtitle">{{ $team->subtitle }}</h3>
                        <div class="cs-height_5 cs-height_lg_5"></div>
                        <div class="cs-separator cs-accent_bg"></div>
                        <div class="cs-height_45 cs-height_lg_25"></div>
                        {!! $team->desc !!}
                        <div class="cs-height_45 cs-height_lg_30"></div>
                        <div class="team-details-btns">
                            <a href="{{ $team->link1 }}">
                                <i style="font-size: 28px" class="{{ $team->class1 }}"></i>
                            </a>
                            <a href="{{ $team->link2 }}">
                                <i style="font-size: 28px" class="{{ $team->class2 }}"></i>
                            </a>
                            <a href="{{ $team->link3 }}">
                                <i style="font-size: 28px" class="{{ $team->class3 }}"></i>
                            </a>
                            <a href="{{ $team->link4 }}">
                                <i style="font-size: 28px" class="{{ $team->class4 }}"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
