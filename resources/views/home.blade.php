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
            <img src="img/computers.png" alt="">
            <p>Branding</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>UI & UX</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Packaging</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Motion Graphics</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Web Developing</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Contint Creation</p>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-header">
        <h1>Our Works</h1>
        <a href="/services">See More</a>
    </div>
    <div class="fix"></div>
    <div class="grid">
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Branding</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>UI & UX</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Packaging</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Motion Graphics</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Web Developing</p>
        </div>
        <div class="grid-item">
            <img src="img/computers.png" alt="">
            <p>Contint Creation</p>
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
