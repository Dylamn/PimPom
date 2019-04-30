@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')

    <div class="container" id="side">
        <div class="container table-responsive pt-5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#menu1" data-toggle="tab" role="tab" aria-controls="menu1"
                       aria-selected="true">Disponible(s)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu2" data-toggle="tab" role="tab" aria-controls="menu2"
                       aria-selected="false">Réservé(s)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu3" data-toggle="tab" role="tab" aria-controls="menu3"
                       aria-selected="false">Réparation</a>
                </li>
            </ul>

            {{--<ul class="nav nav-tabs">--}}
            {{--<li class="nav-item active"><a data-toggle="tab" href="#menu1">Disponible(s)</a></li>--}}
            {{--<li class="nav-item"><a data-toggle="tab" href="#menu2">Réservé(s)</a></li>--}}
            {{--<li class="nav-item"><a data-toggle="tab" href="#menu3">Réparation</a></li>--}}
            {{--</ul>--}}

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active" role="tabpanel" aria-labelledby="menu1-tab">
                    <h3>Disponible</h3>
                    <div id="disponible">
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
                                        @if($statement->statusLabel == "Disponible")
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
                                                    <i class="fa fa-pencil"
                                                       style="color:orange; font-size: 1.4em;"> </i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <delete-form
                                                        action="{{ Route('equipements.destroy', ['equipment' => $statement->id]) }}"
                                                        method="{{ __('DELETE') }}"
                                                        csrf="{{ csrf_token() }}">
                                                </delete-form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade" role="tabpanel" aria-labelledby="menu2-tab">
                    <h3>Réservé</h3>
                    <div id="reserve">
                        <table class="table table-striped table-bordered table-hover">
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
                                    @if($statement->statusLabel == "Réservé")
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
                                                <i class="fa fa-pencil"
                                                   style="color:orange; font-size: 1.4em;"> </i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <delete-form
                                                    action="{{ Route('equipements.destroy', ['equipment' => $statement->id]) }}"
                                                    method="{{ __('DELETE') }}"
                                                    csrf="{{ csrf_token() }}">
                                            </delete-form>
                                        </td>
                                        @endif
                                        </tr>
                                        @endforeach
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade" role="tabpanel" aria-labelledby="menu3-tab">
                    <h3>Réparation</h3>
                    <div id="reparation">
                        <table class="table table-striped table-bordered table-hover">
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
                                        @if($statement->statusLabel == "Réparation")
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
                                                    <i class="fa fa-pencil"
                                                       style="color:orange; font-size: 1.4em;"> </i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <delete-form
                                                        action="{{ Route('equipements.destroy', ['equipment' => $statement->id]) }}"
                                                        method="{{ __('DELETE') }}"
                                                        csrf="{{ csrf_token() }}">
                                                </delete-form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
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
