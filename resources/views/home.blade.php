@extends('layouts.app')

@section('content')

<div class="owl-carousel">
    <div><img src="img/slider-1-op.jpg" alt=""></div>
    <div><img src="img/slider-2-op.jpg" alt=""></div>
    <div><img src="img/slider-3-op.jpg" alt=""></div>
</div>
<div class="fix"></div>

<div class="grid-container">
    <div class="grid-header">
        <h1>@lang('site.our_services')</h1>
        {{-- <a href="/services">See More</a> --}}
        <div class="btns">
            <button class="prev disabled" disabled id="prev-services"><i class="ri-arrow-left-s-line"></i></button>
            <button class="next" id="next-services"><i class="ri-arrow-right-s-line"></i></button>
        </div>
    </div>
    <div class="fix"></div>
    <div class="grid">
        <div class="grid-item grid-services">
            <a href="/services/branding">
                <div class="img">
                    <img class="branding-img" src="img/branding-icon.png" alt="">
                </div>
                <p class="name">@lang('site.branding')</p>
                <p class="breif">@lang('site.branding_intro_services')</p>
                <button>See More</button>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/ui">
                <div class="img">
                    <img src="img/ui&ux-icon.png" alt="">
                </div>
                <p class="name">@lang('site.ui')</p>
                <p class="breif">@lang('site.ui_intro_services')</p>
                <button>See More</button>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/packaging">
                <div class="img">
                    <img class="packaging-img" src="img/packaging-icon.png" alt="">
                </div>
                <p class="name">@lang('site.packaging')</p>
                <p class="breif">@lang('site.packaging_intro_services')</p>
                <button>See More</button>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/motion">
                <div class="img">
                    <img src="img/motion-graphics-icon.png" alt="">
                </div>
                <p class="name">@lang('site.motion')</p>
                <p class="breif">@lang('site.motion_intro_services')</p>
                <button>See More</button>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/web">
                <div class="img">
                    <img src="img/web-development-icon.png" alt="">
                </div>
                <p class="name">@lang('site.web')</p>
                <p class="breif">@lang('site.web_intro_services')</p>
                <button>See More</button>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/content-creation">
                <div class="img">
                    <img src="img/digital-marketing-icon.png" alt="">
                </div>
                <p class="name">@lang('site.digital')</p>
                <p class="breif">@lang('site.digital_intro_services')</p>
                <button>See More</button>
            </a>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-header">
        <h1>@lang('site.our_work')</h1>
        {{-- <a href="/works">See More</a> --}}
        <div class="btns">
            <button class="prev disabled" disabled id="prev-work"><i class="ri-arrow-left-s-line"></i></button>
            <button class="next" id="next-work"><i class="ri-arrow-right-s-line"></i></button>
        </div>
    </div>
    <div class="fix"></div>
    <div class="grid">
        <div class="grid-item grid-work">
            <a href="/work/branding">
                <img src="img/branding-works.jpg" alt="">
                <p>@lang('site.branding')</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/ui">
                <img src="img/ui-works.jpg" alt="">
                <p>@lang('site.ui')</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/packaging">
                <img src="img/packaging-works.jpg" alt="">
                <p>@lang('site.packaging')</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/motion">
                <img src="img/motion-works.jpg" alt="">
                <p>@lang('site.motion')</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/web">
                <img src="img/web-works.jpg" alt="">
                <p>@lang('site.web')</p>
            </a>
        </div>
        <div class="grid-item">
            <div class="grid-item grid-work">
                <img src="img/digital-works.jpg" alt="">
                <p>@lang('site.digital')</p>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            nav: true,
            dots: true
        });
    });

</script>
@endsection
