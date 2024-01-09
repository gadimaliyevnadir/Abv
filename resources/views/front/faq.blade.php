@extends('front.layouts.app')
@section('metatitle')
    {{$metatag->faq_title}}
@endsection
@section('metadesc')
    {{$metatag->faq_desc}}
@endsection
@section('metakeywords')
    {{$metatag->faq_keywords}}
@endsection
@section('content')



    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
        <x-header-component />
    </header>

    <!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg cs-bg-page">
        <div class="container">
            <div class="cs-page_heading_in">
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.faqus')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.html">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active">@lang('website.faq')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4" data-aos="fade-right">
        <div class="cs-faq_nav cs-radius_15">
          <h2 class="cs-faq_nav_title cs-m0">FAQ Category</h2>
          <div class="cs-height_30 cs-height_lg_30"></div>
          <ul class="cs-list cs-style1 cs-mp0">
            <li>
              <a href="faq.html" class="cs-text_btn cs-type2">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#FF4A17"/>
                </svg>
                <span>Service related</span>
              </a>
            </li>
            <li>
              <a href="faq.html" class="cs-text_btn cs-type2">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#FF4A17"/>
                </svg>
                <span>Pricing</span>
              </a>
            </li>
            <li>
              <a href="faq.html" class="cs-text_btn cs-type2">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#FF4A17"/>
                </svg>
                <span>Project delivery</span>
              </a>
            </li>
            <li>
              <a href="faq.html" class="cs-text_btn cs-type2">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#FF4A17"/>
                </svg>
                <span>Documentation</span>
              </a>
            </li>
          </ul>
        </div>
      </div> -->
            <div class="col-lg-12 " data-aos="fade-left">
                <div class="cs-height_0 cs-height_lg_40"></div>
                <div class="cs-accordians cs-style1">
                    @foreach ($faqs as $faq)
                    <div class="cs-accordian ">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title">{!!$faq->title!!}</h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <svg width="15" height="8" viewBox="0 0 15 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0L7.5 7.5L15 0H0Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <div class="cs-accordian_body">
                           {!!$faq->desc!!}
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_80"></div>


    <x-footcontact-component />



@endsection
