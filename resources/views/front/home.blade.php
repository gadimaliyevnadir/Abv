@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->home_title }}
@endsection
@section('metadesc')
    {{ $metatag->home_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->home_keywords }}
@endsection
@section('content')
    @if ($slidervideo->type = 'video')
        <video autoplay muted loop id="background-video">
            <source src="{{ $slidervideo->image }}" type="video/mp4">
        </video>
    @endif
    <div class="cover-slider">
        @foreach ($sliderimages as $image)
            @if ($image->type ='image')
                <div class="cover-img">
                    <img src="{{$image->image}}" alt="">
                </div>
            @endif
        @endforeach
    </div>

    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header  video-container">

        <x-header-component />

        <div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1" style="z-index: -1;">
            <div class="container">
                <div class="cs-hero_text">
                    <div class=" typewriter-area">

                        <h1 style="font-size:30px; margin-bottom:0px !important" class=" wow fadeInRight typewriter"
                            data-wow-duration="0.1s" data-wow-delay="0.1s">{{$setting->title}}</br><span style="font-style:italic;font-weight: 400; font-size: 21px;"> Daha təhlükəsiz həyat üçün.</span></h1>
                    </div>
                    <div class="cs-hero_info pt-5">
                        <div class="cs-hero_info-link">
                            <a href="https://abv.filagency.az/service" class="cs-text_btn">
                                <span>@lang('website.know-our')</span>
                                <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-hero_social_wrap cs-primary_font cs-primary_color">
                <div class="cs-hero_social_title">@lang('website.follow')</div>
                <ul class="cs-hero_social_links">
                    @foreach ($socialicons as $socialicon)
                        <a href="{{ $socialicon->links }}">
                            <i class="{{ $socialicon->class }}"></i>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>
    <x-funfact-component />
    <div class="cs-height_145 cs-height_lg_80"></div>
    <section>
        <div class="container">
            <div class="cs-slider cs-style2 cs-gap-24" data-aos="fade-right" data-aos-duration="3000">
                <div class="cs-slider_heading cs-style1">
                    <div class="cs-section_heading cs-style1 pb-5">
                        <h2 class="cs-section_title">@lang('website.board-of-Directors')</h2>
                    </div>
                    <div class="cs-right_arrow cs-center">
                        <a href="{{ route('front.team') }}"
                            style="border: 1px solid #fff; border-radius: 30px; padding: 8px 20px;">
                            <svg width="34" height="13" viewBox="0 0 26 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5305 7.03033C25.8233 6.73744 25.8233 6.26256 25.5305 5.96967L20.7575 1.1967C20.4646 0.903806 19.9897 0.903806 19.6968 1.1967C19.4039 1.48959 19.4039 1.96447 19.6968 2.25736L23.9395 6.5L19.6968 10.7426C19.4039 11.0355 19.4039 11.5104 19.6968 11.8033C19.9897 12.0962 20.4646 12.0962 20.7575 11.8033L25.5305 7.03033ZM0.00012207 7.25H25.0001V5.75H0.00012207V7.25Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($teams as $team)
                        <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-12  col-12" style="margin-bottom: 15px;"
                            data-aos="flip-left">
                            <div class="cs-slide">
                                <div class="cs-team cs-style1">
                                    <div class="cs-member_thumb">
                                        <img src="{{ $team->image }}" alt="Member">
                                        <div class="cs-member_overlay"></div>
                                    </div>
                                    <div class="cs-member_info">
                                        <h2 class="cs-member_name">
                                            <a href="{{ route('front.teamDetail',$team->id) }}">{{ $team->title }}</a>
                                        </h2>
                                        <div class="cs-member_designation">{{ $team->subtitle }}</div>
                                    </div>
                                    <div class="cs-member_social cs-primary_color">
                                        @if (isset($team->class1))
                                            <a href="{{ $team->link1 }}">
                                                <i class="{{ $team->class1 }}"></i>
                                            </a>
                                        @endif
                                        @if (isset($team->class2))
                                            <a href="{{ $team->link2 }}">
                                                <i class="{{ $team->class2 }}"></i>
                                            </a>
                                        @endif
                                        @if (isset($team->class3))
                                            <a href="{{ $team->link3 }}">
                                                <i class="{{ $team->class3 }}"></i>
                                            </a>
                                        @endif
                                        @if (isset($team->class4))
                                            <a href="{{ $team->link4 }}">
                                                <i class="{{ $team->class4 }}"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
            </div>
        </div>
    </section>
    <x-missia-component />
    <section class="client-area" data-aos="fade-up-left">
        <div class="container">
            <h2 class="cs-section_title" data-aos="fade-left">@lang('website.clients')</h2>
            <p class="client-area-text">@lang('website.clientdesc')</p>
            <div class="cs-partner_logo_wrap  client-top-slider">
                @foreach ($clients as $client)
                    <div class="cs-partner_logo">
                        <img src="{{ $client->image }}" alt="Partner">
                    </div>
                @endforeach
            </div>
            <div class="cs-partner_logo_wrap  client-bottom-slider" dir="rtl">
                @foreach ($customers as $customer)
                    <div class="cs-partner_logo">
                        <img src="{{ $customer->image }}" alt="Partner">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="service" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="cs-section_heading cs-style1">
                        <h2 class="cs-section_title" data-aos="fade-up-right">@lang('website.solitions')</h2>
                        <div class="cs-height_45 cs-height_lg_20"></div>
                        <a href="service.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
                            data-wow-delay="0.2s">
                            <span>@lang('website.solitionssee')</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="cs-height_90 cs-height_lg_45"></div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        @php
                            $b = 2;
                            $i = 0;
                        @endphp
                        @foreach ($solutioncategories as $solutioncategory)
                            @php
                                $i += 1;
                            @endphp
                            @if ($i >= 2 && $i % 2 == 1)
                                @php
                                    $b += 1;
                                @endphp
                            @endif
                            @if ($b % 2 == 1)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="cs-hobble">
                                        <a href="{{ route('front.serviceDetail', ['id' => $solutioncategory->id, 'title' => $solutioncategory->title]) }}"
                                            class="cs-card cs-style1 cs-hover_layer1">
                                            <img src="{{ $solutioncategory->image }}" alt="Hizmet">
                                            <div class="cs-card_overlay"></div>
                                            <div class="cs-card_info">
                                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                                <h2 class="cs-card_title">{{ $solutioncategory->title }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cs-height_0 cs-height_lg_30"></div>
                                </div>
                                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                            @else
                                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="cs-hobble">
                                        <a href="{{ route('front.serviceDetail', ['id' => $solutioncategory->id, 'title' => $solutioncategory->title]) }}"
                                            class="cs-card cs-style1 cs-hover_layer1">
                                            <img src="{{ $solutioncategory->image }}" alt="Hizmet">
                                            <div class="cs-card_overlay"></div>
                                            <div class="cs-card_info">
                                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                                <h2 class="cs-card_title">{{ $solutioncategory->title }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cs-height_0 cs-height_lg_30"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service" data-aos="zoom-in-down">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 order-xl-1 order-lg-2 order-md-2 order-sm-2 order-2 ">
                    <div class="row">
                        @php
                            $b = 2;
                            $i = 0;
                        @endphp
                        @foreach ($projects as $project)
                            @php
                                $i += 1;
                            @endphp
                            @if ($i >= 2 && $i % 2 == 1)
                                @php
                                    $b += 1;
                                @endphp
                            @endif
                            @if ($b % 2 == 1)
                            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="cs-hobble">
                                        <a href="{{route('front.projectDetail',['id'=>$project->id,'slug'=>$project->slug])}}" class="cs-card cs-style1 cs-hover_layer1">
                                            <img src="{{ $project->image }}" style="height:200px" alt="Hizmet">
                                            <div class="cs-card_overlay"></div>
                                            <div class="cs-card_info">
                                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                                <h2 class="cs-card_title">{{ $project->title }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cs-height_0 cs-height_lg_30"></div>
                                </div>

                            @else

                                <div class="col-lg-3 col-sm-6">
                                    <div class="cs-hobble">
                                        <a href="{{route('front.projectDetail',['id'=>$project->id,'slug'=>$project->slug])}}" class="cs-card cs-style1 cs-hover_layer1">
                                            <img src="{{ $project->image }}" style="height:200px" alt="Hizmet">
                                            <div class="cs-card_overlay"></div>
                                            <div class="cs-card_info">
                                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                                <h2 class="cs-card_title">{{ $project->title }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cs-height_0 cs-height_lg_30"></div>
                                </div>
                                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-4 order-xl-2 order-lg-1 order-md-1 order-sm-1 order-1 ">
                    <div class="cs-section_heading cs-style1">
                        <h2 class="cs-section_title" data-aos="fade-left">@lang('website.our-projects')</h2>
                        <div class="cs-height_45 cs-height_lg_20"></div>
                        <a href="service.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
                            data-wow-delay="0.2s">
                            <span>@lang('website.seeprojects')</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="cs-height_90 cs-height_lg_45"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="cs-height_70 cs-height_lg_70"></div>
    <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="cs-section_heading cs-style1">
            <h2 class="cs-section_title" data-aos="fade-right" style="margin-bottom: 30px;">@lang('website.vendors')</h2>
        </div>
        <div class="cs-partner_logo_wrap  vendor-slider">
            @foreach ($vendors as $vendor)
                <div class="cs-partner_logo" style="background-color: white !important;">
                    <img src="{{ $vendor->image }}" alt="Partner">
                </div>
            @endforeach
        </div>
    </div>
    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
