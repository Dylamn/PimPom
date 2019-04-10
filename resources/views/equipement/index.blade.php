@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div class="container table-responsive" style="padding-top: 3%">
            <table class="table table-striped table-bordered table-hover">
                @if(!isset($all))
                    <tr>
                        {{ "Aucun équipements n'est enregistré." }}
                    </tr>
                @endif

                @foreach($all as $one)
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center">{{ ! empty(current($one)) ? current($one)->label : '' }}</th>
                            <th class="text-center">Référence</th>
                            <th class="text-center">Taille</th>
                            <th class="text-center">Prix adulte</th>
                            <th class="text-center">Prix enfant</th>
                            <th class="text-center">Modifier</th>
                            <th class="text-center">Supprimer</th>
                        </tr>
                        </thead>

                        @foreach($one as $statement)
                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">{{ $statement->internalId }}</td>
                                <td class="text-center">{{ $statement->size }} cm</td>
                                <td class="text-center">{{ $statement->adultPrice }} €</td>
                                <td class="text-center">{{ $statement->childrenPrice }} €</td>
                                <td class="text-center">
                                    <a href="{{ Request::url() . '/' . $statement->id }}/modifier">
                                        <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form name="delete_form" action="{{ Request::url() . '/' . $statement->id }}"
                                          method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <i class="fa fa-times btn-delete" style="color:red; font-size: 1.4em;"></i>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
    <script src="{{ asset('js/submit_form.js') }}"></script>
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
