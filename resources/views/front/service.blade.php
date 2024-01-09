@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->service_title }}
@endsection
@section('metadesc')
    {{ $metatag->service_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->service_keywords }}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.solitions')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.html">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active">@lang('website.solitions')</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_80"></div>
    <section class="cs-shape_wrap_4 cs-parallax">
        <div class="cs-shape_4 cs-to_up"></div>
        <div class="cs-shape_4 cs-to_right"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="cs-section_heading cs-style1">
                        <h2 class="cs-section_title">@lang('website.solutiontitle')</h2>
                    </div>
                    <div class="cs-height_90 cs-height_lg_45"></div>
                </div>
                <div class="col-xl-8" data-aos="fade-left">
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
                                        <a href="{{route('front.serviceDetail',['id'=>$solutioncategory->id,'title'=>$solutioncategory->title])}}" class="cs-card cs-style1 cs-hover_layer1">
                                            <img src="{{ $solutioncategory->image }}" style="height:200px" alt="Hizmet">
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
                                        <a href="{{route('front.serviceDetail',['id'=>$solutioncategory->id,'title'=>$solutioncategory->title])}}" class="cs-card cs-style1 cs-hover_layer1">
                                            <img src="{{ $solutioncategory->image }}" style="height:200px" alt="Hizmet">
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
                <div class="container" style="margin-left:670px;margin-top:70px">
                    {{$solutioncategories->links()}}
                </div>

            </div>
        </div>
    </section>
    <!-- End Service Section -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
