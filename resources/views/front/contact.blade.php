@extends('front.layouts.app')
@section('metatitle')
    {{$metatag->contact_title}}
@endsection
@section('metadesc')
    {{$metatag->contact_desc}}
@endsection
@section('metakeywords')
    {{$metatag->contact_keywords}}
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
                <h1 class="cs-page_title cs-font_50 cs-white_color">@lang('website.contactus')</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active">@lang('website.contact')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="cs-section_heading cs-style1">
                    <h2 class="cs-section_title" data-aos="fade-up">@lang('website.question')</h2>
                </div>
                <div class="cs-height_55 cs-height_lg_30"></div>
                <ul class="cs-contact_info cs-style1 cs-mp0">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z"
                                fill="#f7a707"></path>
                        </svg>
                        <span>{{$setting->phone}}</span>
                    </li>
                    <li>
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z"
                                fill="#f7a707"></path>
                        </svg>
                        <span>{{$setting->email}}</span>
                    </li>
                    <li>
                        <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z"
                                fill="#f7a707"></path>
                        </svg>
                        <span>{!!$setting->address!!}</span>
                    </li>
                </ul>
                <div class="cs-height_0 cs-height_lg_50"></div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <form  action="{{route('email')}}" method="POST" class="row">
                    @csrf
                    <input type="hidden" name="access_key" value="6d7bc3fc-6190-43c5-8298-89ac5ef7494f">
                    <input type="checkbox" name="botcheck" style="display: none;">
                    <input type="hidden" name="subject" value="Submission from Markup Template">

                    <div class="col-sm-6">
                        <label class="cs-primary_color">@lang('website.fullname')*</label>
                        <input type="text" class="cs-form_field" name="name" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="cs-primary_color">@lang('website.email')*</label>
                        <input type="text" class="cs-form_field" name="email" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="cs-primary_color">@lang('website.typeofproject')*</label>
                        <input type="text" class="cs-form_field" name="subject" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="cs-primary_color">@lang('website.contact-number')*</label>
                        <input type="text" class="cs-form_field" name="phone" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-lg-12">
                        <label class="cs-primary_color">@lang('website.projectinfo')*</label>
                        <textarea cols="30" rows="7" class="cs-form_field" name="message" required></textarea>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-lg-12">
                        <button class="cs-btn cs-style1" type="submit">
                            <span>@lang('website.send')</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <div id="cs-result"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="cs-google_map cs-bg" data-aos="zoom-in-down">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12150.691697511922!2d49.857966!3d40.41609600000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030872dd687fe59%3A0x539f770f55f3765!2sABV%20Head%20office!5e0!3m2!1sru!2sua!4v1703326693443!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="cs-height_50 cs-height_lg_40"></div>


@endsection
