@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div id="table" class="container table-responsive" style="padding-top: 3%">
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

                {{--@foreach($categories as $statement)--}}
                    {{--<tr>--}}
                        {{--<td class="text-center">{{ $statement->label }}</td>--}}
                        {{--<td class="text-center">{{ $statement->adultPrice }} €</td>--}}
                        {{--<td class="text-center">{{ $statement->childrenPrice }} €</td>--}}
                        {{--<td class="text-center">--}}
                            {{--<a href="{{ Request::url() . '/' . $statement->id }}/modifier">--}}
                                {{--<i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td class="text-center">--}}
                            {{--<form name="delete_form{{__($statement->id) }}"--}}
                                  {{--action="{{ Request::url() . '/' . $statement->id }}" method="POST">--}}
                                {{--@method('DELETE')--}}
                                {{--@csrf--}}
                                {{--<i id="btn-delete" class="fa fa-times" style="color:red; font-size: 1.4em;"></i>--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}

            </table>
        </div>
    </div>
@endsection

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
@endsection

