    <!-- Start CTA -->
    <section data-aos="fade-up">
        <div class="container">
            <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1 cta_background">
                <div class="cs-shape_1"></div>
                <div class="cs-shape_1"></div>
                <div class="cs-shape_1"></div>
                <div class="cs-cta_in">
                    <h2 class="cs-cta_title cs-semi_bold cs-m0">@lang('website.contactyou')</h2>
                </div>
            </div>
            <form action="{{ route('emails') }}" method="POST">
             @csrf
             @include('admin.layout.includes.alert-message')
            @method('POST')
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-md-6 col-12 form-group" style="margin-bottom: 15px;">
                    <input name="fullname" type="text" placeholder="@lang('website.fullname')" class="input-contact">
                </div>
                <div class="col-lg-3 col-md-6 col-12 form-group" style="margin-bottom: 15px;">
                    <input name="phone" type="text" placeholder="@lang('website.contact-number')" class="input-contact">
                </div>
                <div class="col-lg-3 col-md-6 col-12 form-group" style="margin-bottom: 15px;">
                    <input name="email" type="email" placeholder="@lang('website.email')" class="input-contact">
                </div>
                <div class="col-lg-3 col-md-6 col-12 form-group" style="margin-bottom: 15px;">
                    <textarea class="input-contact" name="note" cols="50" rows="1" placeholder="@lang('website.note')"></textarea>
                </div>
                <div class="col-lg-4 col-md-6 col-12" style="margin-bottom: 15px;">
                    <button type="submit"  class="btn-contact">@lang('website.send')</button>
                </div>
            </div>
            </form>
        </div>
    </section>
