@extends('../layouts.app')

@section('css')
<link rel="stylesheet" href="/css/contact.css">
@endsection

@section('content')
<div id="copied">@lang('site.copied')</div>
<div class="content-contact">
    <p><a href='tel:+201006104925'><img src="/img/phone.svg"> +20 100 610 49 25</a></p>
    <p><a href="https://wa.me/201033739707" target="_blank"><img src="/img/whatsapp.svg"> +20 10 33 739 707</a></p>
    <div class="links">
        <p><a href="https://www.facebook.com/Thirtythreehouse/" target="_blank"><img src="/img/FB.png"
                    alt="Facebook link"></a>
        </p>
        <p><a href="#" target="_blank"><img src="/img/TW.png" alt="Twietter link"></a></p>
        <p><a href="https://www.instagram.com/thirtythreehouse/" target="_blank"><img src="/img/IG.png"
                    alt="Intagram link"></a>
        </p>
        <p><a href="#" target="_blank"><img src="/img/LI.png" alt="LinkeIn link"></a></p>
    </div>
    <p><img src="/img/mail.svg"> <span id="mail">sales@thirtythreehouse.com</span></p>
</div>
@endsection

@section('js')
<script src="/js/contact.js"></script>
@endsection
