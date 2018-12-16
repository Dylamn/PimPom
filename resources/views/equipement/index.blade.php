@extends('layouts.master')
@section('navbar')
    @extends('layouts.navbar')
@endsection
@extends('layouts.sidebar')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr class="alert-success">
                <td class="text-center">Catégorie</td>
                <td class="text-center">Référence</td>
                <td class="text-center">Taille</td>
                <td class="text-center">Prix adulte</td>
                <td class="text-center">Prix enfant</td>
                <td class="text-center">Modifier</td>
                <td class="text-center">Supprimer</td>
            </tr>
            </thead>

            @foreach($equipements as $statement)
                <tr>
                    <td class="text-center">{{ $statement->libelle }}</td>
                    <td class="text-center">{{ $statement->idInterne }}</td>
                    <td class="text-center">{{ $statement->taille }}</td>
                    <td class="text-center">{{ $statement->prixAdulte }}</td>
                    <td class="text-center">{{ $statement->prixEnfant }}</td>
                    <td class="text-center">
                        <a href="/equipements/{{ $statement->id }}/edit">
                            <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <FORM name="delete_form" action="/equipements/{{ $statement->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            {{--<a href="/equipements/{{ $statement->id }}">--}}
                                <span class="fa fa-times" style="color:red; font-size: 1.4em;" onclick="submit_form()"></span>
                            {{--</a>--}}
                        </FORM>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection

@section('script')
    <!-- Script for the sidebar -->
    <script src="{{asset('js/sidebar.js')}}"></script>

    <script type="text/javascript">
        function submit_form(ev) {
            let ok = confirm('Voulez vous vraiment supprimer cet équipement ?');

            if (ok) {
                document.forms['delete_form'].submit();
            } else {
                 ev.preventDefault();
            }
        }
    </script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
@endsection
