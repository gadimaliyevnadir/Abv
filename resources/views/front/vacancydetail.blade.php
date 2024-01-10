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
            <h2>{{ $vacancy->title }}</h2>
            <span>Son gorunme tarixi: {{ strftime('%d %B %Y', strtotime($vacancy->date)) }}</span>
            {!! $vacancy->desc !!}
            <div class="col-lg-4 col-md-6 col-12 pt-3" style="margin-bottom: 15px;">
                <a href="mailto:job@abv.az" class="btn-contact">@lang('website.cvsend')</a>
            </div>
        </div>
    </section>

    <x-footcontact-component />
@endsection
