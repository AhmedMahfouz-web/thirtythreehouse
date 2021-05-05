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
        <h1>Our Services</h1>
        <a href="/services">See More</a>
    </div>
    <div class="fix"></div>
    <div class="grid">
        <div class="grid-item">
            <a href="/services/branding">
                <img src="img/computers.png" alt="">
                <p>Branding</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/services/ui">
                <img src="img/computers.png" alt="">
                <p>UI & UX</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/services/packaging">
                <img src="img/computers.png" alt="">
                <p>Packaging</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/services/motion">
                <img src="img/computers.png" alt="">
                <p>Motion Graphics</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/services/web">
                <img src="img/computers.png" alt="">
                <p>Web Development</p>
            </a>
        </div>
        <div class="grid-item">
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
        <a href="/works">See More</a>
    </div>
    <div class="fix"></div>
    <div class="grid">
        <div class="grid-item">
            <a href="/work/branding">
                <img src="img/computers.png" alt="">
                <p>Branding</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/work/ui">
                <img src="img/computers.png" alt="">
                <p>UI & UX</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/work/packaging">
                <img src="img/computers.png" alt="">
                <p>Packaging</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/work/motion">
                <img src="img/computers.png" alt="">
                <p>Motion Graphics</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/work/web">
                <img src="img/computers.png" alt="">
                <p>Web Development</p>
            </a>
        </div>
        <div class="grid-item">
            <a href="/work/content">
                <img src="img/computers.png" alt="">
                <p>Content Creation</p>
            </a>
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
