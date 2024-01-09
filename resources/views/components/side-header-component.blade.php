<div class="cs-side_header">
    <button class="cs-close"></button>
    <div class="cs-side_header_overlay"></div>
    <div class="cs-side_header_in">
        <div class="cs-side_header_shape"></div>
        <a class="cs-site_branding" href="index.html">
            <img src="{{ $setting->image }}" alt="Logo">
        </a>
        <div class="cs-side_header_box">
            <h2 class="cs-side_header_heading">@lang('website.question')</h2>
        </div>
        <div class="cs-side_header_box">
            <h3 class="cs-side_header_title cs-primary_color">@lang('website.contactus')</h3>
            <ul class="cs-contact_info cs-style1 cs-mp0">
                <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z"
                            fill="#f7a707" />
                    </svg>
                    <span>{{ $setting->phone }}</span>
                </li>
                <li>
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z"
                            fill="#f7a707" />
                    </svg>
                    <span>{{ $setting->email }}</span>
                </li>
                <li>
                    <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z"
                            fill="#f7a707" />
                    </svg>
                    <span>{!! $setting->address !!}</span>
                </li>
            </ul>
        </div>
        <div class="cs-side_header_box">
            <div class="footer-social-btns">
                @foreach ($socialicons as $socialicon)
                    <a href="{{ $socialicon->links }}">
                        <i class="{{ $socialicon->class }}"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
