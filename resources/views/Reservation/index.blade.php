@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div id="table" class="container table-responsive" style="padding-top: 3%">
            @if(count($all) == 0)
                <div class="row">
                    <div class="col-md">
                        <h2 style="text-align: center">Il n'y a aucune réservation</h2>
                    </div>
                </div>
            @else
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center">Client</th>
                        <th class="text-center">Equipements</th>
                        <th class="text-center">Début</th>
                        <th class="text-center">Fin</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">Supprimer</th>
                    </tr>
                    </thead>

                    @foreach($all as $one)
                        <tr>
                            <td class="text-center">{{ $one->userName }}</td>
                            <td class="text-center">{{ $one->label }}</td>
                            <td class="text-center">{{ (new DateTime($one->start))->format('d-m-Y') }}</td>
                            <td class="text-center">{{ (new DateTime($one->end))->format('d-m-Y') }}</td>
                            <td class="text-center">
                                <a href="{{ Request::url() . '/' . $one->id }}/modifier">
                                    <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <form name="delete_form{{__($one->id) }}"
                                      action="{{ Request::url() . '/' . $one->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <i id="btn-delete" class="fa fa-times" style="color:red; font-size: 1.4em;"></i>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            @endif
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

