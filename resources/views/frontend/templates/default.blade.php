<!DOCTYPE html>
    <html>

        {{-- head --}}
        <header>
        @include ('frontend.templates.partials.head')
    </header>
        
            <body>

               
                {{-- nav --}}
                @include('frontend.templates.partials.nav')
                

                <main>

                {{-- content --}}
                <div class="container">
                    @yield('content')
                </div>

                </main>




                <!--JavaScript at end of body for optimized loading-->
                @include('frontend.templates.partials.script')

               
            </body>
            <footer>
                    @include('frontend.templates.partials.footer')
            </footer>

         

    </html>
