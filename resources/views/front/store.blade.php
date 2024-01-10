@extends('front.layouts.app')
@section('content')
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 cs-sticky_header">
        <x-header-component />
    </header>



    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg cs-bg-page">
        <div class="container">
            <div class="cs-page_heading_in">
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.store')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="index.html">@lang('website.home')</a>
                    </li>
                    <li class="breadcrumb-item active">@lang('website.store')</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_80"></div>


    <section>
        <div class="container">
            <div class="row">
                @foreach ($stores as $store)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="addres-cart">
                            <iframe src="{{ $store->maplink }}" width="100%" height="450"
                                style="border:0;  border-radius: 10px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="addres-cart-content">
                                <h3>{{ $store->title }}</h3>
                                <span> <i class="fas fa-location-arrow"></i> {{ $store->address }}</span>
                                <a href="tel:+994{{ $store->phone }}"> <i class="fas fa-phone-alt"></i> {{ $store->phone }}</a>
                                <a href="mailto:{{ $store->email }}"><i class="fas fa-envelope"></i>{{ $store->email }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="cs-height_130 cs-height_lg_70"></div>
    <x-footcontact-component />
@endsection
