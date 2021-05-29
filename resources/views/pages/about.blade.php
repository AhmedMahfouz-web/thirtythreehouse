@extends('../layouts.app')

@section('css')
<link rel="stylesheet" href="/css/about.css">
@endsection

@section('content')
<div class="content-about">
    <img src="/img/company.jpg" alt="company">
    <h1>@lang('site.about')</h1>
    <p>@lang('site.about-p')</p>
</div>
@endsection
