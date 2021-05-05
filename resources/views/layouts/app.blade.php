<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thirty Three House</title>
    <link rel="icon" href="/img/logo-33-2-browser-50x50.png">

    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    @yield('css')

</head>

<body>

    <header>
        <div class="logo-header">
            <div id="icon">
                <div class="hamburger"></div>
            </div>
            <div class="text">
                <h1><a href="/">ThirtyThree</a></h1>
                <h5><a href="/">house</a></h5>
            </div>
        </div>
    </header>
    <div class="fix"></div>
    <nav id="nav">
        <div>
            <p><a href="/">Home</a></p>
        </div>
        <div>
            <p><a href="/about">About</a></p>
        </div>
        <div id="services-btn">
            <p>Our Services <span class="arrow"><i class="ri-arrow-down-s-line"></i></span></p>
        </div>
        <div id="services">
            <p><a href="/services/branding">Branding</a></p>
            <p><a href="/services/ui">UI & UX</a></p>
            <p><a href="/services/packaging">Packaging</a></p>
            <p><a href="/services/motion">Motion</a></p>
            <p><a href="/services/web">Web Development</a></p>
            <p><a href="/services/content">Content Creation</a></p>
            <p><a href="/services/script">Script Writing</a></p>
        </div>
        <div id="work-btn">
            <p>Our Work <span class="arrow"><i class="ri-arrow-down-s-line"></i></span></p>
        </div>
        <div id="work">
            <p><a href="/work/branding">Branding</a></p>
            <p><a href="/work/ui">UI & UX</a></p>
            <p><a href="/work/packaging">Packaging</a></p>
            <p><a href="/work/motion">Motion</a></p>
            <p><a href="/work/web">Web Development</a></p>
            <p><a href="/work/content">Content Creation</a></p>
            <p><a href="/work/script">Script Writing</a></p>
        </div>
        <div>
            <p><a href="/contact">Contact Us</a></p>
        </div>
    </nav>


    @yield('content')

    <footer>
        <div class="footer-about">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a orci viverra, hendrerit felis ac,
                rutrum
                orci. Nullam tristique at tortor sit amet ultrices. Vivamus mauris eros, suscipit vulputate nisl.
            </p>
        </div>

        <div class="footer-contact">
            <h4>Contact Us</h4>
            <div class="links">
                <p><a href="https://www.facebook.com/Thirtythreehouse/"><img src="/img/FB.png" alt="Facebook link"></a>
                </p>
                <p><a href="#"><img src="/img/TW.png" alt="Twietter link"></a></p>
                <p><a href="https://www.instagram.com/thirtythreehouse/"><img src="/img/IG.png" alt="Intagram link"></a>
                </p>
                <p><a href="#"><img src="/img/WA.png" alt="Whatsapp link"></a></p>
                <p><a href="#"><img src="/img/LI.png" alt="LinkeIn link"></a></p>
            </div>
        </div>

        <div><img src="/img/logo-33-BLACK-PNG-800800.png" alt="Thirty Three Logo"></div>
        <p class="rights">All Rights Reserved <a href="/">Thirtythreehouse.com</a> &copy;
        </p>
    </footer>


</body>

<script src="/js/dom-slider.js"></script>
<script src="/js/main.js"></script>
@yield('js')

</html>
