    <div class="cs-preloader cs-center" style="flex-direction:column;gap:15px">

        <img src="{{$setting->image}}" style="height:100px;" alt="Logo">
        <div style="font-size: 45px; color:#f7a707;" id="countdown"></div>
    </div>

    <div class="navigation">
        <img style="width: 100px;margin-top: 10px; margin-left: 30px;" src="{{$setting->image}}" alt="">

        <span class="navigation-close">&times;</span>

        <nav class="toggle-nav">
            <ul>
                <li><a href="{{ route('front.home') }}">@lang('website.home')</li>
                <li>
                    <a href="#" class="dropdown-toggle">@lang('website.about')</a>
                    <ul class="dropdown-container">
                        <li><a href="{{ route('front.about') }}">@lang('website.about')</a></li>
                        <li><a href="{{route('front.faq')}}">@lang('website.faq')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">@lang('website.media')</a>
                    <ul class="dropdown-container">
                        <li><a href="{{route('front.blog')}}">@lang('website.blog')</a></li>
                        <li><a href="{{route('front.photos')}}">@lang('website.photo')</a></li>
                        <li><a href="{{ route('front.videos') }}">@lang('website.video')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">@lang('website.career')</a>
                    <ul class="dropdown-container">
                        <li><a href="{{ route('front.vacancy') }}">@lang('website.vacancies')</a></li>
                        <li><a href="{{ route('front.news') }}">@lang('website.news')</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('front.projects') }}">@lang('website.projects')</a></li>
                <li>
                    <a href="{{ route('front.service') }}">@lang('website.solitions')</a>
                </li>
                <li><a href="{{ route('front.contact') }}">@lang('website.contact')</a></li>
            </ul>
        </nav>
    </div>
