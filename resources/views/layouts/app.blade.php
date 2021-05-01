<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thirty Three House</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

</head>

<body>

    <header>
        <div class="logo-header">
            <div id="icon">
                <div class="hamburger"></div>
            </div>
            <div class="text">
                <h1>ThirtyThree</h1>
                <h5>house</h5>
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
            <p><a href="services/branding">Branding</a></p>
            <p><a href="services/ui">UI & UX</a></p>
            <p><a href="services/packaging">Packaging</a></p>
            <p><a href="services/motion">Motion</a></p>
            <p><a href="services/web">Web Developing</a></p>
            <p><a href="services/content">Content Creating</a></p>
            <p><a href="services/script">Script Writing</a></p>
        </div>
        <div id="work-btn">
            <p>Our Work <span class="arrow"><i class="ri-arrow-down-s-line"></i></span></p>
        </div>
        <div id="work">
            <p><a href="services/branding">Branding</a></p>
            <p><a href="services/ui">UI & UX</a></p>
            <p><a href="services/packaging">Packaging</a></p>
            <p><a href="services/motion">Motion</a></p>
            <p><a href="services/web">Web Developing</a></p>
            <p><a href="services/content">Content Creating</a></p>
            <p><a href="services/script">Script Writing</a></p>
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

        <div class="footer-services">
            <h4>Our Services</h4>
            <p><i class="ri-subtract-fill"></i> <a href="#">Branding</a></p>
            <p><i class="ri-subtract-fill"></i> <a href="#">UI & UX</a></p>
            <p><i class="ri-subtract-fill"></i> <a href="#">Packaging</a></p>
            <p><i class="ri-subtract-fill"></i> <a href="#">Motion</a></p>
            <p><i class="ri-subtract-fill"></i> <a href="#">Web Developing</a></p>
            <p><i class="ri-subtract-fill"></i> <a href="#">Content Creation</a></p>
            <p><i class="ri-subtract-fill"></i> <a href="#">Script Writing</a></p>
        </div>

        <div><img src="img/33-logo.png" alt=""></div>
        <p class="rights">All Rights Reserved <a href="/">Thirtythreehouse.com</a> &copy;
        </p>
    </footer>


</body>

<script src="js/dom-slider.js"></script>
<script src="js/main.js"></script>
@yield('js')

</html>
