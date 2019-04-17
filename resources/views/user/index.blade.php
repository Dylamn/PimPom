@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div id="table" class="container table-responsive" style="padding-top: 3%">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th class="text-center">Nom</th>
                <th class="text-center">Prénom</th>
                <th class="text-center">Email</th>
                <th class="text-center">Privilège</th>
                <th class="text-center">Modifier</th>
                <th class="text-center">Supprimer</th>
            </tr>
            </thead>

            @foreach($user as $statement)
                <tr>
                    <td class="text-center">{{ $statement->surname }}</td>
                    <td class="text-center">{{ $statement->firstName }}</td>
                    <td class="text-center">{{ $statement->email }}</td>
                    <td class="text-center">{{ $statement->privilege }}</td>
                    <td class="text-center">
                        <a href="{{ Route('utilisateurs.edit', ['user' => $statement->id]) }}">
                            <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form name="delete_form{{__($statement->id) }}"
                              action="{{ Route('utilisateurs.destroy', ['user' => $statement->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <i class="fa fa-times btn-delete" style="color:red; font-size: 1.4em;"></i>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@section('script')
    <!-- JQuery -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
    <script src="{{ asset('js/submit_form.js') }}"></script>
@endsection
