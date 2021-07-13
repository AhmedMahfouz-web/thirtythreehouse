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
    <div class="header header-ui">
        <h1>@lang('site.ui')</h1>
    </div>
    <div class="offer">
        <p class="about">@lang('site.ui_intro')</p>
        <h2>@lang("site.service_contain"):</h2>
        <ul>
            <li>@lang('site.ui-contain')</li>
        </ul>
        <h2>@lang("site.additional_options"):</h2>
        <input type="checkbox" id="fo" name="fo" value="ui-1" price="50">
        <label for="fo"> @lang('site.ui-add-1')</label><br>
        <input type="checkbox" id="so" name="so" value="ui-2" price="30">
        <label for="so"> @lang('site.ui-add-2')</label><br>
        <input type="checkbox" id="to" name="to" value="ui-3" price="50">
        <label for="to"> @lang('site.ui-add-3')</label><br>

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
        <div class="grid grid-ui">
            <div class="grid-item">
                <div class="right">
                    <img src="/img/ui.png" alt="">
                </div>
                <div class="left">
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                </div>
                <div class="fix"></div>
            </div>
            <div class="grid-item">
                <div class="right">
                    <img src="/img/ui.png" alt="">
                </div>
                <div class="left">
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                </div>
                <div class="fix"></div>
            </div>
            <div class="grid-item">
                <div class="right">
                    <img src="/img/ui.png" alt="">
                </div>
                <div class="left">
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                </div>
                <div class="fix"></div>
            </div>
            <div class="grid-item">
                <div class="right">
                    <img src="/img/ui.png" alt="">
                </div>
                <div class="left">
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                </div>
                <div class="fix"></div>
            </div>
        </div> --}}
</div>
@endsection

@section('js')
<script src="/js/services.js"></script>
@endsection
