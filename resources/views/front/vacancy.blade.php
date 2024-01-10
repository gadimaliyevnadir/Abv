@extends('front.layouts.app')
@section('metatitle')
    {{ $metatag->vacancy_title }}
@endsection
@section('metadesc')
    {{ $metatag->vacancy_desc }}
@endsection
@section('metakeywords')
    {{ $metatag->vacancy_keywords }}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.vacancies')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="index.html">@lang('website.home')</a>
                    </li>
                    <li class="breadcrumb-item active">@lang('website.vacancies')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($vacancies as $vacancy)
                <div class="col-12"
                    style="background: linear-gradient(267.18deg, #161616 0%, #080808 100%);
                border-radius: 15px; padding: 40px; margin-bottom: 20px;">
                    <div class="row" style="align-items: center;">
                        <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                            <h3 class="vacancy-title">{{$vacancy->title}}</h3>
                            <p>@lang('website.deadline') {{strftime('%d %B %Y',strtotime($vacancy->date))}}</p>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12 col-12" style="text-align: center; margin-top: 20px;">
                            <a class="vacancy-link" href="{{ route('front.vacancyDetail',$vacancy->id) }}">@lang('website.apply')<i
                                    class="fa-solid fa-arrow-right-long " style="margin-left: 5px;"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Why Choose -->
    <div class="cs-height_145 cs-height_lg_80"></div>
    <!-- Start Team Section -->
    <!-- End Team Section -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
