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
                        <delete-form
                                action="{{ Route('utilisateurs.destroy', ['user' => $statement->id]) }}"
                                method="{{ __('DELETE') }}"
                                csrf="{{ csrf_token() }}">
                        </delete-form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@section('script')
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
@endsection
