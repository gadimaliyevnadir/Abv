@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->photos_title }}
@endsection
@section('metadesc')
    {{ $metatag->photos_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->photos_keywords }}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.photo')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="index.html">@lang('website.home')</a>
                    </li>
                    <li class="breadcrumb-item active">@lang('website.photo')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <div class="cs-height_150 cs-height_lg_80"></div>

    <section>
        <div class="container">
            <div class="row mb-100">
                @foreach ($photos as $key=>$photo)
                    <div class="galery-column col-lg-4 col-md-6 mb-30" data-aos="flip-down">
                        <img src="{{ $photo->image }}" onclick="openModal();currentSlide({{ $key+1}})"
                            class="galery-hover-shadow">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- The Modal/Lightbox -->
    <div id="galery-myModal" class="galery-modal">
        <span class="galery-close cursor" onclick="closeModal()">&times;</span>
        <div class="galery-modal-content">
            @foreach ($photos as $key => $photo)
                <div class="galery-mySlides">
                    <div class="galery-numbertext">{{ $key + 1 }} /{{ count($photos) }}</div>
                    <img src="{{ $photo->image }}" style="width:100%">
                </div>
            @endforeach
            <!-- Next/previous controls -->
            <a class="galery-prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="galery-next" onclick="plusSlides(1)">&#10095;</a>

        </div>
    </div>

    <div class="cs-height_150 cs-height_lg_80"></div>

    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
