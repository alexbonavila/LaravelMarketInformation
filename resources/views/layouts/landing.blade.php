<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">

    <title>Acacha AdminLTE Laravel package template Landing page - Using Pratt</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>adminlte-laravel</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#que_es" class="smoothScroll">Què és?</a></li>
                <li><a href="#informacio" class="smoothScroll">Informació</a></li>
                <li><a href="#captures" class="smoothScroll">Captures</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="que_es"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1><b><a href="https://github.com/alexbonavila/LaravelMarketInformation">Laravel Market Information</a></b></h1>
                <h4 style="color:white;">
                    LaravelMarketInformation és una aplicació web feta amb Laravel, aquesta aplicació el que fa es proveir d'informació financera, tant en temps real com històrica (amb 2 anys d'antiguitat), aquesta aplicació està pensada exclusivament per a clients registrats.
                </h4>
                </BR>
                <img src="{{ asset('/img/landing/captura1_pc.png') }}" class="img-responsive" alt="">
                </BR>
                <h3>
                    Si encara no esteu registrats us animo a fer el pas, és gratuït.
                </h3>

        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->

    <!-- About Section -->
    <section id="informacio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="centered">Informació</h1>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Per poder descarregar el codi cal adreçar-se a la següent direcció de github</p>
                </div>
                <div class="col-lg-4">
                    <p>També cal seguir els passos per instal·lar i evitar saltar-se'n cap, per últim desitjar que construïu algun projecte sorprenent a partir d'aquest.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> <h3 style="color:#00a65a;">Visitar github</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>


<section id="captures"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">Captures de pantalla</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/landing/captura1_pc.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/landing/captura2_pc.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/landing/captura3_pc.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>
<div id="c">
    <div class="container">
        <p>
            Projecte creat per Alex Bonavila:</BR>
            <a href="https://github.com/alexbonavila/LaravelMarketInformation">Github</a></BR>
            <a href="http://acacha.org/mediawiki/Usuari:Alex_bonavila">Wiki</a>
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
