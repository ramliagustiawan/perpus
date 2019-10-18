<!DOCTYPE html>
    <html>

        {{-- head --}}
        @include ('frontend.templates.partials.head')

            <body>

                {{-- nav --}}
                @include('frontend.templates.partials.nav')




                {{-- content --}}
                <div class="container">
                    @yield('content')
                </div>





                <!--JavaScript at end of body for optimized loading-->
                @include('frontend.templates.partials.script')

            </body>

         @include('frontend.templates.partials.footer')

    </html>
