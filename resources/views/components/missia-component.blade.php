
<section>
        <div class="container">
            <div class="cs-tabs cs-style1" data-aos="fade-up-right">
                <div class="cs-tabs_heading">
                </div><!-- .cs-tabs_heading -->
                <div class="cs-height_85 cs-height_lg_40"></div>
                <div class="cs-tab_body">
                    <div class="row">
                        @foreach ($missias as $missia)
                        <div class="col-lg-4" style="margin-bottom: 20px">
                            <div class="cs-pricing_table cs-style1" style="height: 360px">
                                <h2 class="cs-pricing_title">{{$missia->title}}</h2>
                                <div class="cs-price_text pb-3 pt-3">{!!$missia->desc!!}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
