@extends('layouts.app')

@section('content')

<div class="owl-carousel">
    <div><img src="img/slider-1-op.jpg" alt=""></div>
    <div><img src="img/slider-2-op.jpg" alt=""></div>
    <div><img src="img/slider-3-op.jpg" alt=""></div>
</div>
<div class="fix"></div>

<div class="grid-container">
    <iframe src="https://my.spline.design/untitled-8b206208e8367755d3ffacb567f8f8bb" frameborder="0" width="100%"
        height='100%'></iframe>
    <div class="grid-header">
        <h1>Our Services</h1>
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
                <img src="img/computers.png" alt="">
                <p>Branding</p>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/ui">
                <img src="img/computers.png" alt="">
                <p>UI & UX</p>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/packaging">
                <img src="img/computers.png" alt="">
                <p>Packaging</p>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/motion">
                <img src="img/computers.png" alt="">
                <p>Motion Graphics</p>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/web">
                <img src="img/computers.png" alt="">
                <p>Web Development</p>
            </a>
        </div>
        <div class="grid-item grid-services">
            <a href="/services/content">
                <img src="img/computers.png" alt="">
                <p>Content Creation</p>
            </a>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-header">
        <h1>Our Works</h1>
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
                <img src="img/computers.png" alt="">
                <p>Branding</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/ui">
                <img src="img/computers.png" alt="">
                <p>UI & UX</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/packaging">
                <img src="img/computers.png" alt="">
                <p>Packaging</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/motion">
                <img src="img/computers.png" alt="">
                <p>Motion Graphics</p>
            </a>
        </div>
        <div class="grid-item grid-work">
            <a href="/work/web">
                <img src="img/computers.png" alt="">
                <p>Web Development</p>
            </a>
        </div>
        <div class="grid-item">
            <div class="grid-item grid-work">
                <img src="img/computers.png" alt="">
                <p>Content Creation</p>
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
