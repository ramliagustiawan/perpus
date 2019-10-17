<!DOCTYPE html>
    <html>

        {{-- head --}}
        @include ('frontend.templates.partials.head')

            <body>

                {{-- nav --}}
                @include('frontend.templates.partials.nav')



                {{-- slider --}}
                @include('frontend.templates.partials.slider')

                {{-- content --}}
                <div class="container">
                    @yield('content')
                </div>

                {{-- our services --}}
                @include('frontend.templates.partials.service')



                <!--JavaScript at end of body for optimized loading-->
                @include('frontend.templates.partials.script')

            </body>

         @include('frontend.templates.partials.footer')

    </html>
