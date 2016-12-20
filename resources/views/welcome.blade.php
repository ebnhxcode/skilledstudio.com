@extends('layouts.clean')
@section('title') Home @endsection
@section('content')
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="font-family: Coolvetica;">

  <!-- Navigation -->
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          Menu <i class="fa fa-bars"></i>
        </button>
        {{--
        <a class="navbar-brand page-scroll" href="#page-top">
          <i class="fa fa-play-circle"></i> <span class="light" style="font-family: Coolvetica;">SkilledStudio</span>
        </a>
        --}}

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="font-family: Coolvetica;">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#about">Dembora</a>
          </li>
          <li>
            <a class="page-scroll" href="#news">Noticias</a>
          </li>
          <li>
            <a class="page-scroll" href="#develop">Desarrollo</a>
          </li>
          <li>
            <a class="page-scroll" href="#multimedia">Multimedia</a>
          </li>
          <li>
            <a class="page-scroll" href="#joincommunity">Comunidad</a>
          </li>

          @if (Auth::guest())
            <li>
              <a class="page-scroll" href="{!! url('/login') !!}">Acceso</a>
            </li>
            <li>
              <a class="page-scroll" href="{!! url('/register') !!}">Registro</a>
            </li>
          @else
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-sign-out"></i>Menú</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
          @endif



        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Intro Header -->
  <header class="intro">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <span style="font-family: Coolvetica;color:#c43d23;" class="brand-heading">Skilled</span>
              <span style="font-family: Coolvetica;color:#d5822d;" class="brand-heading">Studio</span>
            <p class="intro-text">
              Dembora project.
            </p>
            <a href="#about" class="btn btn-circle page-scroll">
              <i class="fa fa-angle-double-down animated"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="container content-section text-center">
    <div id="about">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h1 style="text-transform: none;font-family: Coolvetica;">Dembora</h1>
          <h2 style="text-transform: none;font-family: Coolvetica;">The Secret of Magic</h2>
          <h3 style="text-transform: none;font-family: Coolvetica;color:#d5822d;">
            Samin, un joven Chamán debe emprender un viaje, que le permitirá entender el asesinato de su maestro Sulay. Para obtener respuestas de la muerte Samin deberá adquirir los cuatro amuletos de los Dioses Elementales, pero la búsqueda no será fácil, ya que deberá enfrentar a las diferentes criaturas elementales.
          </h3>

          <h4>Coming Soon.</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Download Section -->
  <section id="news" class="content-section text-center">
    <div class="download-section" style="background: url(../img/backgrounds/Fondos.png) no-repeat center center scroll;">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>Noticias</h2>
          <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
          <a href="#!" class="btn btn-default btn-lg">
            Ver los últimos posts
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Develop Section -->
  <section id="develop" class="content-section text-center">
    <div class="download-section" style="background: url(../img/backgrounds/Fondos7.png) no-repeat center center scroll;">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>Desarrollo</h2>
          <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
          <a href="#!" class="btn btn-default btn-lg">
            Conoce a nuestro Equipo
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Multimedia Section -->
  <section id="multimedia" class="content-section text-center">
    <div class="download-section" style="background: url(../img/backgrounds/Fondos4.png) no-repeat center center scroll;">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>Multimedia</h2>
          <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
          <a href="#!" class="btn btn-default btn-lg">
            Mira nuestras galerías
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Join Section -->
  <section id="joincommunity" class="content-section text-center">
    <div class="download-section" style="background: url(../img/backgrounds/Fondos12.png) no-repeat center center scroll;">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>Unete a Nuestra Comunidad</h2>
          <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
          <a href="#!" class="btn btn-default btn-lg">
            Unete a nuestra comunidad
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="content-section text-center">
    <div class="download-section" style="background: url(../img/backgrounds/Fondos10.png) no-repeat center center scroll;"  >
      <div class="">
        <h2>UNETE A NUESTRAS REDES SOCIALES</h2>
        <p>Y entérate de todo lo que sucede con nuestro equipo</p>
        <p><a href="mailto:leandro@skilledstudio.com">leandro@skilledstudio.com</a>
        </p>

        <ul class="list-inline banner-social-buttons">

          <li>
            <img width="96" height="96" class="media-object" src="{!! asset('img/socialIcons/twitter.png') !!}" alt="">
          </li>

          <li>
            <img width="96" height="96" class="media-object" src="{!! asset('img/socialIcons/facebook.png') !!}" alt="">
          </li>

          <li>
            <img width="96" height="96" class="media-object" src="{!! asset('img/socialIcons/youtube.png') !!}" alt="">
          </li>

          <li>
            <img width="96" height="96" class="media-object" src="{!! asset('img/socialIcons/gplus.png') !!}" alt="">
          </li>

          <li>
            <img width="96" height="96" class="media-object" src="{!! asset('img/socialIcons/soundcloud.png') !!}" alt="">
          </li>

        </ul>

      </div>
    </div>
  </section>

  <!-- Map Section -->
  {{--<div id="map"></div>--}}

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p>Copyright &copy; Dembora&SkilledStudio {{date('Y')}}</p>
    </div>
  </footer>

  <!-- jQuery -->


  <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>





  </body>
@endsection

