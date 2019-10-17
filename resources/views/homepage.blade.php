<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}"  media="screen,projection"/>

    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset ('assets/mystyle/style.css') }}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>



     <div class="navbar-fixed">
        <nav class=" purple lighten-3">
            <div class="container">
                <div class="nav-wrapper">
                <a href="#!" class="brand-logo">SIP PATEN</a>
                 <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Informasi Layanan</a></li>
                <li><a href="badges.html">E-Layanan</a></li>
                 <li><a href="sass.html">Pelaporan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- side nav --}}
    <ul class="sidenav" id="mobile-nav">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
  </ul>

  {{-- slider --}}

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset ('assets/images/slider1.png') }}"> <!-- random image -->
        <div class="caption left-align">
          <h3>SIP PATEN</h3>
          <h5 class="light grey-text text-lighten-3">SISTEM INFORMASI, PELAPORAN DAN PELAYANAN TERPADU KECAMATAN</h5>
        </div>
      </li>
    </ul>
    </div>

    {{-- our services --}}
    <section id="services" class="services grey lighten-3">
        <div class="container">
            <div class="row">
                <h3 class="ligt center grey-text-darken-3">Layanan</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons small">desktop_mac</i>
                        <h5>Informasi Layanan</h5>
                        <p>Informasi Status Layanan yang anda ajukan</p>

                    </div>
                </div>

                 <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons small">desktop_mac</i>
                        <h5>E-Layanan</h5>
                        <p>Silahkan ajukan layanan yang anda butuhkan</p>

                    </div>
                </div>

                 <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons small">desktop_mac</i>
                        <h5>Pelaporan</h5>
                        <p>Silahkan sampaikan Pengaduan/keluhan Anda </p>

                    </div>
                </div>



            </div>
        </div>

    </section>






    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

    {{-- sidebar script --}}
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
    </script>

    {{-- slider script --}}

    <script>
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500
        });
    </script>




  </body>

    <footer class="page-footer purple lighten-3 ">
          <div class="footer-copyright purple lighten-3  ">
            <div class="container ">
            © 2019 Ertech
            <a class="grey-text text-lighten-4 right text-flow" href="#!">Sistem Informasi Pelaporan dan Pelayanan Terpadu Kecamatan V.1.0</a>
            </div>
          </div>
    </footer>
</html>
