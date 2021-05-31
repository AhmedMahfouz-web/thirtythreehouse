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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tempore perspiciatis deserunt quidem id,
                ullam,
                nisi laborum quos reprehenderit harum unde saepe quaerat eligendi pariatur suscipit itaque voluptas
                dolorem
                temporibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nobis. Laudantium ullam
                fugiat
                iusto assumenda sunt unde veritatis sapiente ea neque praesentium tenetur recusandae id magnam nihil,
                esse
                minus suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores modi eligendi aliquid
                doloribus quos placeat,</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="header header-digital">
        <h1>@lang('site.digital')</h1>
    </div>
    <div class="offer">
        <p class="about">@lang('site.digital_intro')</p>
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


        <input type="checkbox" id="privacy" name="privacy">
        <label for="privacy" class="privacy-text"> I have read Privacy & Policy and I agreed with it</label><br>
        <a href="https://google.com" class="btn" id="whatsapp" target='_blank'><img src="/img/whatsapp.png"
                alt="whatsapp"></a>
    </div>
</div>
@endsection

@section('js')
<script src="/js/services.js"></script>
@endsection
