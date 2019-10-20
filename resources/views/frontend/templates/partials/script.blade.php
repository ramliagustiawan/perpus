<script type="text/javascript" src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

    {{-- sidebar script --}}
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
    </script>

     {{-- dropdown script --}}
     <script>
            const dropdown = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdown);
    </script>

    {{-- slider script --}}

    <script>
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500
        });
    </script>
