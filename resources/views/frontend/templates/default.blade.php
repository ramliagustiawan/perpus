<!DOCTYPE html>
    <html>

        {{-- head --}}
        <header>
        @include ('frontend.templates.partials.head')
    </header>

            <body>


                {{-- nav --}}
                @include('frontend.templates.partials.navperpus')


                <main>

                {{-- content --}}
                <div class="container">
                    @yield('content')
                </div>

                </main>




                <!--JavaScript at end of body for optimized loading-->
                @include('frontend.templates.partials.script')
                {{-- toast materialize --}}
                @include('frontend.templates.partials.toast')



            </body>
            <footer>
                    @include('frontend.templates.partials.footer')
            </footer>



    </html>
