@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div id="table" class="container table-responsive" style="padding-top: 3%">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-light">
                <tr>
                    <th class="text-center">Catégorie</th>
                    <th class="text-center">Prix adulte</th>
                    <th class="text-center">Prix enfant</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Supprimer</th>
                </tr>
                </thead>

                @foreach($categories as $statement)
                    <tr>
                        <td class="text-center">{{ $statement->label }}</td>
                        <td class="text-center">{{ $statement->adultPrice }} €</td>
                        <td class="text-center">{{ $statement->childrenPrice }} €</td>
                        <td class="text-center">
                            <a href="{{ Route('categorie.edit', ['category' => $statement->id]) }}">
                                <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <delete-form
                                action="{{ Route('categorie.destroy', ['category' => $statement->id]) }}"
                                method="{{ __('DELETE') }}"
                                csrf="{{ csrf_token() }}">
                            </delete-form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
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

<script>
    import DeleteForm from "../../js/components/DeleteForm";
    export default {
        components: { DeleteForm }
    }
</script>
