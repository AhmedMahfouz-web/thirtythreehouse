<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:image" content="/img/33-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">

    <title>Thirty Three House</title>
    <link rel="icon" href="/img/logo-33-2-browser-50x50.png">

    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    @yield('css')

    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="/css/style_ar.css">
    @endif


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZD3PLDP2KK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZD3PLDP2KK');

    </script>

</head>

<body id="body" @if (app()->getLocale() == 'ar')
    data="ar"
    @endif>

    <header>
        <div class="content">
            <div class="logo-header">
                <div id="icon">
                    <div class="hamburger"></div>
                </div>

                <div class="lang">
                    @if (app()->getLocale() == 'ar')
                    <a href="/locale/en"><img src="/img/saudi_arabia.png" alt="AR" title="Arabic"></a>
                    @else
                    <a href="/locale/ar"><img src="/img/england.png" alt="EN" title="English"></a>
                    @endif
                </div>

                <div class="text">
                    <h1><a href="/">ThirtyThree</a></h1>
                    <h5><a href="/">hous<span class="last-letter">e</span></a></h5>
                </div>
            </div>
        </div>

    </header>


    <div class="content-nav">
        <nav id="nav">
            <div>
                <p><a href="/">@lang('site.home')</a></p>
            </div>
            <div>
                <p><a href="/about">@lang('site.about')</a></p>
            </div>
            <div id="services-btn">
                <p>@lang('site.services') </p><span class="arrow"><i class="ri-arrow-down-s-line"></i></span>
                <div id="services">
                    <p><a href="/services/branding">@lang('site.branding')</a></p>
                    <p><a href="/services/ui">@lang('site.ui')</a></p>
                    <p><a href="/services/packaging">@lang('site.packaging')</a></p>
                    <p><a href="/services/motion">@lang('site.motion')</a></p>
                    <p><a href="/services/web">@lang('site.web')</a></p>
                    <p><a href="/services/content-creation">@lang('site.digital')</a></p>
                </div>
            </div>
            <div id="work-btn">
                <p>@lang('site.work') </p><span class="arrow"><i class="ri-arrow-down-s-line"></i></span>
                <div id="work">
                    <p><a href="/work/branding">@lang('site.branding')</a></p>
                    <p><a href="/work/ui">@lang('site.ui')</a></p>
                    <p><a href="/work/packaging">@lang('site.packaging')</a></p>
                    <p><a href="/work/motion">@lang('site.motion')</a></p>
                    <p><a href="/work/web">@lang('site.web')</a></p>
                </div>
            </div>
            <div>
                <p><a href="/contact-us">@lang('site.contact')</a></p>
            </div>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <div class="content content-footer">
            <div class="footer-about">
                <h4>@lang('site.about_us')</h4>
                <p>@lang('site.about-p')</p>
            </div>

            <div class="footer-contact">
                <h4>@lang('site.contact')</h4>
                <div class="links">
                    <p><a href="https://www.facebook.com/Thirtythreehouse/" target="_blank"><img src="/img/FB.png"
                                alt="Facebook link"></a>
                    </p>
                    <p><a href="#" target="_blank"><img src="/img/TW.png" alt="Twietter link"></a></p>
                    <p><a href="https://www.instagram.com/thirtythreehouse/" target="_blank"><img src="/img/IG.png"
                                alt="Intagram link"></a>
                    </p>
                    <p><a href="#" target="_blank"><img src="/img/WA.png" alt="Whatsapp link"></a></p>
                    <p><a href="#" target="_blank"><img src="/img/LI.png" alt="LinkeIn link"></a></p>
                </div>
            </div>

            <div><img src="/img/logo-33-BLACK-PNG-800800.png" alt="Thirty Three Logo"></div>
            <div class="fix"></div>
        </div>
    </footer>
    <p class="rights">All Rights Reserved <a href="/">Thirtythreehouse.com</a> &copy;
    </p>


</body>

<script src="/js/dom-slider.js"></script>
<script src="/js/main.js"></script>
@yield('js')

</html>
