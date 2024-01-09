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
            <div class="cs-page_heading_in" data-aos="fade-left">
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.board-of-Directors')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.html">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active">@lang('website.board-of-Directors')</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="cs-height_145 cs-height_lg_80"></div>
    <section>
        <div class="container">
            <div class="cs-section_heading cs-style1 text-center" data-aos="flip-left">
                <h2 class="cs-section_title">@lang('website.board-of-Directors')</h2>
            </div>
            <div class="cs-height_90 cs-height_lg_45"></div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-lg-4 col-sm-6" data-aos="flip-left">
                    <div class="cs-team cs-style1">
                        <div class="cs-member_thumb">
                            <img src="{{$team->image}}" alt="Member">
                            <div class="cs-member_overlay"></div>
                        </div>
                        <div class="cs-member_info">
                            <h2 class="cs-member_name"><a href="{{route('front.teamDetail',$team->id)}}">{{$team->title}}</a></h2>
                            <div class="cs-member_designation">{{$team->subtitle}}</div>
                        </div>
                        <div class="cs-member_social cs-primary_color">
                            <a href="{{$team->link1}}">
                                <i class="{{$team->class1}}"></i>
                            </a>
                            <a href="{{$team->link2}}">
                                <i class="{{$team->class2}}"></i>
                            </a>
                            <a href="{{$team->link3}}">
                                <i class="{{$team->class3}}"></i>
                            </a>
                            <a href="{{$team->link4}}">
                                <i class="{{$team->class4}}"></i>
                            </a>
                        </div>
                    </div>
                    <div class="cs-height_80 cs-height_lg_30"></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
