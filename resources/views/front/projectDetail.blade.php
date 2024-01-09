@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->project_title }}
@endsection
@section('metadesc')
    {{ $metatag->project_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->project_keywords }}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.projects')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active">@lang('website.projects')</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="cs-height_150 cs-height_lg_80"></div>


    <div class="container">
        @foreach ($projects as $project)
            <div class="cs-portfolio_details">
                <img data-aos="fade-up" src="{{ $project->image }}" alt="Image" class="cs-radius_15 w-100">
                <div class="cs-height_90 cs-height_lg_40"></div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="cs-section_heading cs-style1">
                            <h2 class="cs-section_title">{!! $project->title !!}</h2>
                            <div class="cs-height_40 cs-height_lg_20"></div>
                            <p>{!! $project->desc !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1" data-aos="fade-left">
                        <div class="cs-height_60 cs-height_lg_40"></div>
                        <h2 class="cs-font_30 cs-font_26_sm cs-m0">@lang('website.project-info')</h2>
                        <div class="cs-height_50 cs-height_lg_30"></div>
                        <div class="row">
                            @php
                                $loopCount = 0;
                            @endphp
                            @foreach ($atributes as $atribut)
                                @if ($loopCount < count($project->attribute_options))
                                    <div class="col-6">
                                        <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">
                                            {{ $atribut->name }}
                                        </h3>
                                    </div>
                                    @php
                                        $loopCount++;
                                    @endphp
                                @else
                                <div></div>
                                @break
                            @endif
                        @endforeach
                        @foreach ($project->attribute_options as $option)
                            <div class="col-6">
                                <p class="cs-m0">{{ $option->name }}</p>
                                <div class="cs-height_30 cs-height_lg_30"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="cs-height_130 cs-height_lg_70"></div>
<x-footcontact-component />
@endsection
