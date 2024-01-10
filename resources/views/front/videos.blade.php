@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->videos_title }}
@endsection
@section('metadesc')
    {{ $metatag->videos_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->videos_keywords }}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.video')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="index.html">@lang('website.home')</a>
                    </li>
                    <li class="breadcrumb-item active">@lang('website.video')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>


    <section style="padding-top: 3rem">
        <div id="video_container" class="container">
            <div class="event-procedur-header">
                <h2 style="margin-top: 100px;"></h2>
            </div>

            <div class="row video-area">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="flip-down">
                        <div class="vid youtube"
                            style="background-image:url({{ $video->backimage }});background-size: cover;"
                            ytSrc="{{ $video->link }}">
                            <i style="position: absolute; top: 40%; left: 42%; color: #f7a707;"
                                class="fa-regular fa-circle-play fa-3x"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- <section class="videos">

                <div class="container">
                    <div class="row mb-100">
                        <div class="col-lg-4 col-md-6 mb-30" style = "position: relative;" data-aos="flip-down">
                            <div class="galery-single">
                                <img src="/assets/img/about_img_1.jpeg" alt="trending">
                            </div>
                            <div class="videos-play-btn">
                                <a class="video-popup"  target = "_blank" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30" style = "position: relative;" data-aos="flip-down">
                            <div class="galery-single">
                                <img src="/assets/img/about_img_5.jpeg" alt="trending">
                            </div>
                            <div class="videos-play-btn">
                                <a class="video-popup" target = "_blank" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30" style = "position: relative;" data-aos="flip-down">
                            <div class="galery-single">
                                <img src="/assets/img/about_img_2.jpeg" alt="trending">
                            </div>
                            <div class="videos-play-btn">
                                <a class="video-popup" target = "_blank" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30" style = "position: relative;" data-aos="flip-down">
                            <div class="galery-single">
                                <img src="/assets/img/about_img_3.jpeg" alt="trending">
                            </div>
                            <div class="videos-play-btn">
                                <a class="video-popup" target = "_blank" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30" style = "position: relative;" data-aos="flip-down">
                            <div class="galery-single">
                                <img src="/assets/img/about_img_4.jpeg" alt="trending">
                            </div>
                            <div class="videos-play-btn">
                                <a class="video-popup" target = "_blank" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30" style = "position: relative;" data-aos="flip-down">
                            <div class="galery-single">
                                <img src="/assets/img/about_img_5.jpeg" alt="trending">
                            </div>
                            <div class="videos-play-btn">
                                <a class="video-popup" target = "_blank" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </section> -->
    <div class="cs-height_150 cs-height_lg_80"></div>

    <div class="cs-height_130 cs-height_lg_70"></div>

    <!-- Start CTA -->
    <x-footcontact-component />
    <!-- End CTA -->
@endsection
