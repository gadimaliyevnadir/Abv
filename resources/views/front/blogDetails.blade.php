@extends('front.layouts.app')
@section('metatitle')
    {{$metatag->blog_title}}
@endsection
@section('metadesc')
    {{$metatag->blog_desc}}
@endsection
@section('metakeywords')
    {{$metatag->blog_keywords}}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">Bloq Haqqında Məlumat</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="{{route('front.home')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Bloq Məlumatı</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <!-- Start Blogs -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-out-right">
                    <div class="cs-post cs-style2">
                        <div class="cs-post_thumb cs-radius_15">
                            <img src="{{$blog->image}}" alt="Post" class="w-100 cs-radius_15" style="height: 600px; object-fit: cover;">
                        </div>
                        <div class="cs-post_info">

                            <h2 class="cs-post_title" data-aos="fade-up">{!!$blog->title!!}</h2>
                            {!!$blog->desc!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blogs -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <!-- Start CTA -->
    <x-footcontact-component />
    <!-- End CTA -->
@endsection
