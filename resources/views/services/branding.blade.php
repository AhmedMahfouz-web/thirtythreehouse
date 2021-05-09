@extends('../layouts.app')

@section('css')
<link rel="stylesheet" href="/css/services.css">
@endsection

@section('content')

<div class="container">
    <div class="header">
        <h1>Branding</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem.</p>
    </div>
    <div class="offer">
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

        <p class="old-price" id="old-price">215</p>
        <p class="current-price" id="current-price">120</p> <span class="dollar">$</span>

        <p>Buy it via</p>
        <a href="#" class="btn"><img src="/img/whatsapp.png" alt="whatsapp"> Whatsapp</a>
    </div>
    <div class="grid-container">
        <div class="grid-header">
            <h1>Some Works</h1>
            <a href="/work/branding">See More</a>
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
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="/js/services.js"></script>
@endsection
