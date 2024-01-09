<section>
        <div class="container">
            <div class="cs-funfact_wrap cs-type1" data-aos="fade-up">
                <div class="cs-funfact_shape" data-src="/assets/img/funfact_shape_bg.svg"></div>
                <div class="cs-funfact_left">
                    <div class="cs-funfact_heading">
                        <h2>{{$resulttitle->title}}</h2>
                        <p> {{$resulttitle->desc}}</p>
                    </div>
                </div>
                <div class="cs-funfact_right">
                    <div class="cs-funfacts">
                        @foreach ($results as $result)
                        <div class="cs-funfact cs-style1">
                            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                                <span data-count-to="{{$result->count}}" class="odometer"></span>
                            </div>
                            <div class="cs-funfact_text">
                                <span class="cs-accent_color">+</span>
                                <p>{{$result->title}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
