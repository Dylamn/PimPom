@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div class="container table-responsive" style="padding-top: 3%">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-light">
                <tr>
                    <th class="text-center">{{ ! empty($ski) ? $ski[0]->label : 'Ski' }}</th>
                    <th class="text-center">Référence</th>
                    <th class="text-center">Taille</th>
                    <th class="text-center">Prix adulte</th>
                    <th class="text-center">Prix enfant</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Supprimer</th>
                </tr>
                </thead>
                {!! empty($ski) ? '<tr><td colspan="7" class="text-center alert alert-info"><b>Aucun ski enregistré.</b></td></tr>' : '' !!}

                @foreach($ski as $statement)
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
                            <form name="delete_form" action="{{ Request::url() . '/' . $statement->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <i id="btn-delete" class="fa fa-times" style="color:red; font-size: 1.4em;"></i>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <thead class="thead-light">
                <tr>
                    <th class="text-center">{{ ! empty($snow) ? $snow[0]->label : 'Snowboard'  }}</th>
                    <th class="text-center">Référence</th>
                    <th class="text-center">Taille</th>
                    <th class="text-center">Prix adulte</th>
                    <th class="text-center">Prix enfant</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Supprimer</th>
                </tr>
                </thead>
                {!! empty($snow) ? '<tr><td colspan="7" class="text-center alert alert-info"><b>Aucun snowboard enregistré.</b></td></tr>' : '' !!}

                @foreach($snow as $statement)
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
                            <form name="delete_form" action="{{ Request::url() . '/' . $statement->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <i id="btn-delete" class="fa fa-times" style="color:red; font-size: 1.4em;"></i>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <thead class="thead-light">
                <tr>
                    <th class="text-center">{{ ! empty($luge) ? $luge[0]->label : 'Luge'  }}</th>
                    <th class="text-center">Référence</th>
                    <th class="text-center">Taille</th>
                    <th class="text-center">Prix adulte</th>
                    <th class="text-center">Prix enfant</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Supprimer</th>
                </tr>
                </thead>
                {!! empty($luge) ? '<tr><td colspan="7" class="text-center alert alert-info"><b>Aucune luge enregistrée.</b></td></tr>' : '' !!}

                @foreach($luge as $statement)
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
                            <form name="deleteForm{{ $statement->id }}" action="/equipements/{{ $statement->id }}"
                                  method="POST">
                                @method('DELETE')
                                @csrf
                                <i class="fa fa-times btn-delete" style="color:red; font-size: 1.4em;"></i>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('script')
    <!-- Script -->
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/submit_form.js') }}"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
@endsection
