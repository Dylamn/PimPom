@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div class="container table-responsive pt-5">
            <table class="table table-striped table-bordered table-hover">
                @if(!isset($equipment))
                    <tr>
                        {{ "Aucun équipement n'est actuellement enregistré." }}
                    </tr>
                @endif

                @foreach($equipment as $oneEquipment)
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center">{{ ! empty(current($oneEquipment)) ? current($oneEquipment)->label : '' }}</th>
                        <th class="text-center">Référence</th>
                        <th class="text-center">Taille</th>
                        <th class="text-center">Prix adulte</th>
                        <th class="text-center">Prix enfant</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($oneEquipment as $statement)
                            <tr>
                                <td class="text-center flex flex-row align-content-center">
                                        <span data-toggle="tooltip" data-placement="top"
                                              title="{{ $statement->statusLabel }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="7">
                                                <line x1="0" y1="3" x2="100" y2="3" stroke-width="3px"
                                                      stroke="{{ __($statement->hexaColor) }}"></line>
                                            </svg>
                                        </span>
                                </td>
                                <td class="text-center">{{ $statement->internalId }}</td>
                                <td class="text-center">{{ $statement->size }} cm</td>
                                <td class="text-center">{{ $statement->adultPrice }} €</td>
                                <td class="text-center">{{ $statement->childrenPrice }} €</td>
                                <td class="text-center">
                                    <a href="{{ Route('equipements.edit', ['equipment' => $statement->id]) }}">
                                        <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"> </i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <delete-form
                                        action="{{ Route('equipements.destroy', ['equipment' => $statement->id]) }}"
                                        method="{{ __('DELETE') }}"
                                        csrf="{{ csrf_token() }}">
                                    </delete-form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('script')
    <!-- jQuery Custom Scroller CDN -->
    <script defer
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
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

    <script src="{{ asset('js/tooltip.js') }}" defer></script>
@endsection
