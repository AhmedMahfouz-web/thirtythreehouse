@extends('../layouts.app')

@section('css')
<link rel="stylesheet" href="/css/work.css">

@if (app()->getLocale() == 'ar')
<link rel="stylesheet" href="/css/work_ar.css">
@endif

@endsection

@section('content')

<div class="container">
    <div class="header">
        <h1>Branding</h1>
        <p>@lang('site.branding-intro-work')</p>
    </div>
    <div class="offers">
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
            <div class="grid-item">
                <img src="/img/img6.jpg" alt="">
                <h3 class="title">Untitled</h3>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
            </div>
            <div class="grid-item">
                <img src="/img/img7.jpg" alt="">
                <h3 class="title">Untitled</h3>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
            </div>
        </div>
    </div>
</div>
@endsection
