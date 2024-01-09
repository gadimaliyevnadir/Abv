        <div class="cs-main_header  sticky-bar">
            <div class="container">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <a class="cs-site_branding" href="{{ route('front.home') }}">
                            <img src="{{ $setting->image }}" alt="Logo">
                        </a>
                    </div>
                    <div class="cs-main_header_center">
                        <div class="cs-nav cs-primary_font cs-medium">
                            <ul class="cs-nav_list">
                                <li>
                                    <a href="{{ route('front.home') }}">@lang('website.home')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('front.about') }}">@lang('website.about')</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('front.about') }}">@lang('website.about')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.faq') }}">@lang('website.faq')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('front.projects') }}">@lang('website.projects')</a>
                                </li>
                                <li>
                                    <a href="{{ route('front.service') }}">@lang('website.solitions')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">@lang('website.career')</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('front.vacancy') }}">@lang('website.vacancies')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.news') }}">@lang('website.newspage')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">@lang('website.media')</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('front.blog') }}">@lang('website.blog')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.photos') }}">@lang('website.photo')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.videos') }}">@lang('website.video')</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">@lang('website.contact')</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('front.store') }}">@lang('website.store')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.contact') }}">@lang('website.contact')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tel:+994{!! $setting->corporativenumber !!}">{{ $setting->corporativenumber }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cs-main_header_right">
                        <div class="dropdown-language">
                            @if (app()->getlocale() == 'az')
                                <button>Az<span class="language-arrow">&#x25BE</span></button>
                            @endif

                            @if (app()->getlocale() == 'en')
                                <button>En<span class="language-arrow">&#x25BE</span></button>
                                @endif'@if (app()->getlocale() == 'ru')
                                    <button>Ru<span class="language-arrow">&#x25BE</span></button>
                                @endif
                                <div class="dropdown-language__content">
                                    @foreach ($locales as $key => $locale)
                                        <a href="{{ LaravelLocalization::localizeUrl(url()->current(), $key) }}">
                                            {{ strtoupper($key) }}
                                        </a>
                                    @endforeach
                                </div>

                        </div>
                        <div class="cs-toolbox">
                            <span class="cs-icon_btn">
                                <span class="cs-icon_btn_in">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                        </div>
                        <button class="hamburger">
                            <div id="bar1" class="bar"></div>
                            <div id="bar2" class="bar"></div>
                            <div id="bar3" class="bar"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
