@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container">
        <h1>{{ __($equipement->label) }}</h1>
        <span> {{ __('Référence : ' . $equipement->internalId) }}</span>
    </div>
@endsection

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
        $(document).ready(function () {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });

        $(document).ready(function () {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                // open or close navbar
                $('#sidebar').toggleClass('active');
                // close dropdowns
                $('.collapse.in').toggleClass('in');
                // and also adjust aria-expanded attributes we use for the open/closed arrows
                // in our CSS
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
@endsection
