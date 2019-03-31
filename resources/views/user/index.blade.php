@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

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
                        <a href="{{ Request::url() . '/' . $statement->id }}/modifier">
                            <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form name="delete_form{{__($statement->id) }}" action="{{ Request::url() . '/' . $statement->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <i id="btn-delete" class="fa fa-times" style="color:red; font-size: 1.4em;"></i>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection