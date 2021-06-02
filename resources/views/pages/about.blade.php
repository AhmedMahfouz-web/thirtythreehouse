@extends('../layouts.app')

@section('css')
<link rel="stylesheet" href="/css/about.css">
@endsection

@section('content')
<div class="content-about">
    <div class="img-about">
        <img src="/img/about.jpg" alt="company">
    </div>
    <h1>@lang('site.about')</h1>
    <p>@lang('site.about-p')</p>
</div>
@endsection
