@extends('../layouts.app')

@section('css')
    <link rel="stylesheet" href="/css/services.css">
@endsection

@section('content')
    <div class="toast" id="toast">
        <p>You have to read <span class="blue">Privacy & Policy</span> and agree with it</p>
    </div>

    <div id="privacy-section">
        <div class="black-bg">
            <div class="close"><i class="ri-close-line"></i></div>
            <div class="privacy-content">
                <h1>@lang('site.privacy_policy')</h1>
                <p>@lang('site.privacy')</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header header-branding">
            <h1>@lang('site.branding')</h1>
        </div>
        <div class="offer" data-service="Branding" id="offer">
            <p class="about">@lang('site.branding_intro')</p>
            <h2>@lang("site.service_contain"):</h2>
            <ul>
                <li>@lang('site.branding-contain')</li>
            </ul>
            <h2>@lang("site.additional_options"):</h2>
            <input type="checkbox" class="check-box" id="fo" name="fo" value="<br>-Guidelines" price="50">
            <label for="fo"> @lang('site.branding-add-1')</label><br>
            <input type="checkbox" class="check-box" id="so" name="so" value="<br>-Motion intro" price="30">
            <label for="so"> @lang('site.branding-add-2')</label><br>
            <input type="checkbox" class="check-box" id="to" name="to" value="<br>-Visual identity" price="50">
            <label for="to"> @lang('site.branding-add-3')</label><br>
            {{-- <div>
            <p class="old-price" id="old-price">215</p>
            <p class="current-price" id="current-price">120</p> <span class="dollar">$</span>
        </div> --}}

            <div class="whatsapp-div">
                <input type="checkbox" id="privacy" name="privacy">
                <label for="privacy" class="privacy-text"> @lang("site.read") <span
                        class="blue">@lang("site.privacy_policy")</span> @lang("site.agree")</label><br>
                <a href="https://wa.me/201033739707" class="btn" id="whatsapp" target='_blank'><img src="/img/whatsapp.png"
                        alt="whatsapp"></a>
            </div>
        </div>
        {{-- <div class="grid-container">
        <div class="grid-header">
            <h1>Some Works</h1>
        </div>
        <div class="grid">
            <div class="grid-item">
                <img src="/img/img2.jpg" alt="">
                <h3 class="title">Untitled</h3>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
            </div>
            <div class="grid-item">
                <img src="/img/img3.jpg" alt="">
                <h3 class="title">Untitled</h3>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
            </div>
            <div class="grid-item">
                <img src="/img/img4.jpg" alt="">
                <h3 class="title">Untitled</h3>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
            </div>
            <div class="grid-item">
                <img src="/img/img5.jpg" alt="">
                <h3 class="title">Untitled</h3>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
            </div>
        </div>
    </div> --}}
    </div>
@endsection

@section('js')
    <script src="/js/services.js"></script>
@endsection
