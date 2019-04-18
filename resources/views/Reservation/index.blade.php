@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div id="table" class="container table-responsive pt-5">
            @if(count($all) == 0)
                <div class="row">
                    <div class="col-md">
                        <h2 class="text-center">Il n'y a aucune réservation pour le moment...</h2>
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
                                <a href="{{ Route('reservations.edit', ['rent' => $one->id]) }}">
                                    <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <delete-form
                                    action="{{ Route('reservations.destroy', ['rent' => $one->id]) }}"
                                    method="{{ __('DELETE') }}"
                                    csrf="{{ csrf_token() }}">
                                </delete-form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <!-- jQuery Custom Scroller CDN -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
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
@endsection

