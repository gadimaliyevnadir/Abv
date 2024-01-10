    <footer class="cs-fooer">
        <div class="cs-fooer_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="cs-footer_item">
                              <h2 class="cs-widget_title">@lang('website.sitemap')</h2>
                            <!--<div class="cs-text_widget">-->
                            <!--    <p> {{ $setting->desc }}</p>-->
                            <!--</div>-->
                             <ul class="cs-menu_widget cs-mp0">
                                <li style="margin-bottom: 5px;"> <a href="{{route('front.home')}}">@lang('website.home')</a></li>
                                <li style="margin-bottom: 5px;"> <a href="{{route('front.about')}}">@lang('website.about')</a></li>
                                <li style="margin-bottom: 5px;"> <a href="{{route('front.projects')}}">@lang('website.projects')</a></li>
                                <li style="margin-bottom: 5px;"> <a href="{{route('front.service')}}">@lang('website.solitions')</a></li>
                                <li style="margin-bottom: 5px;"> <a href="{{route('front.vacancy')}}">@lang('website.vacancies')</a></li>
                                <li style="margin-bottom: 5px;"> <a href="{{route('front.blog')}}">@lang('website.blog')</a></li>


                            </ul>
                            <div class="footer-social-btns">
                                @foreach ($socialicons as $socialicon)
                                    <a href="{{ $socialicon->links }}">
                                        <i class="{{ $socialicon->class }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="cs-footer_item">
                            <h2 class="cs-widget_title">@lang('website.branches')</h2>
                            <ul class="cs-menu_widget cs-mp0">
                             <li>{!! $setting->address !!}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="cs-footer_item">
                            <h2 class="cs-widget_title">@lang('website.contactus')</h2>
                            <ul class="cs-menu_widget cs-mp0">
                                <li><a href="tel:+994{!!$setting->corporativenumber!!}">{!!$setting->corporativenumber!!}</a></li>
                                <li><a href="mailto:{!!$setting->email!!}">{!!$setting->email!!}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cs-bottom_footer">
                <div class="cs-bottom_footer_left">
                    <div class="cs-copyright">Copyright © 2024 "Araznet" MMC Elektron təhlükəsizlik sistemləri</div>
                </div>

            </div>
        </div>
    </footer>
    <span class="cs-scrollup">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z"
                fill="currentColor" />
        </svg>
    </span>
    <div class="cs-video_popup">
        <div class="cs-video_popup_overlay"></div>
        <div class="cs-video_popup_content">
            <div class="cs-video_popup_layer"></div>
            <div class="cs-video_popup_container">
                <div class="cs-video_popup_align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="cs-video_popup_close"></div>
            </div>
        </div>
    </div>
