@extends('../layouts.app')

@section('css')
<link rel="stylesheet" href="/css/services.css">
@endsection

@section('content')
<div class="toast" id="toast">
    <p>You have to read <span class="blue">Privacy & Policy</span> and agree with it</p>
</div>

<div class="container">
    <div class="header">
        <h1>Content Creation</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem.</p>
    </div>
    <div class="offer">
        <p>@lang('site.content_intro')</p>
        <h2>Service contains:</h2>
        <ul>
            <li>- Logo design</li>
            <li>- Explain the concept & idea</li>
            <li>- Font type</li>
            <li>- Color palette</li>
            <li>- Logo pattern</li>
        </ul>
        <h2>Additional options:</h2>
        <input type="checkbox" id="fo" name="fo" value="Guidlines" price="50">
        <label for="fo"> Guidlines <span class="price">(+50 $)</span></label><br>
        <input type="checkbox" id="so" name="so" value="Motion" price="30">
        <label for="so"> Motion intro <span class="price">(+30 $)</span></label><br>
        <input type="checkbox" id="to" name="to" value="Identity" price="50">
        <label for="to"> Visual identity <span class="price">(+50 $)</span></label><br>
        <div>
            <p class="old-price" id="old-price">215</p>
            <p class="current-price" id="current-price">120</p> <span class="dollar">$</span>
        </div>


        <input type="checkbox" id="privacy" name="privacy">
        <label for="to" class="privacy-text"> I have read Privacy & Policy and I agreed with it</label><br>
        <a href="https://google.com" class="btn" id="whatsapp" target='_blank'><img src="/img/whatsapp.png"
                alt="whatsapp"></a>
    </div>
</div>
@endsection

@section('js')
<script src="/js/services.js"></script>
@endsection
