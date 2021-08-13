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
        <div class="header header-digital">
            <h1>@lang('site.digital')</h1>
        </div>
        <div class="offer" id="offer" data-service="Content">
            <p class="about">@lang('site.digital_intro')</p>
            <h2>@lang("site.service_contain"):</h2>
            <ul>
                <li>@lang('site.digital-contain')</li>
            </ul>
            <h2>@lang("site.additional_options"):</h2>
            <input type="checkbox" class="check-box" id="fo" name="fo" value="<br>-Social media posters" price="50">
            <label for="fo"> @lang('site.digital-add-1')</label><br>
            <input type="checkbox" class="check-box" id="so" name="so" value="<br>-Social media ADS" price="30">
            <label for="so"> @lang('site.digital-add-2')</label><br>
            <input type="checkbox" class="check-box" id="to" name="to" value="<br>-Motion Graphics" price="50">
            <label for="to"> @lang('site.digital-add-3')</label><br>

            <div class="whatsapp-div">
                <input type="checkbox" id="privacy" name="privacy">
                <label for="privacy" class="privacy-text"> @lang("site.read") <span
                        class="blue">@lang("site.privacy_policy")</span> @lang("site.agree")</label><br>
                <a href="https://wa.me/201033739707" class="btn" id="whatsapp" target='_blank'><img src="/img/whatsapp.png"
                        alt="whatsapp"></a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/services.js"></script>
@endsection
