<div class="navbar-fixed">
        <nav class=" purple lighten-3 ">
            <div class="container">
                <div class="nav-wrapper">
                {{--  <img src="{{ asset('assets/images/favicon.ico') }}" alt="">  --}}
                <a href="#" class="brand-logo">PERPUSTAKAAN ONLINE</a>
                 <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                

                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>


                    @else

                    <li><a href="{{ route('home') }}">Home</a></li>

                    <li><a href="{{ route('buku.index') }}">Daftar Koleksi Buku</a></li>
                
                    <!-- Dropdown Trigger -->
                    <li> 
                        <a class="dropdown-trigger" href="#"" data-target="dropdown1">{{ auth()->user()->name }}</a>
                    </li>

                     <!-- Dropdown Structure -->
                     <ul id="dropdown1" class="dropdown-content">
            
                            <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">logout</i>Log Out</a></li>
                           
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                                    
                @endguest

                </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- side nav --}}
    <ul class="sidenav" id="mobile-nav">
        @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        
        @else

        <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="material-icons">logout</i>
            Log Out</a>
        </li>



        @endguest

    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
    </form>
