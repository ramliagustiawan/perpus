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
