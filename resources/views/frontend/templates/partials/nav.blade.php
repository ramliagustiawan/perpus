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
