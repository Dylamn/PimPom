@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" style="padding-top: 3%" id="side">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Ajouter une catégorie</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('utilisateurs.store') }}" class="form-group">
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="surname">Nom</label>
                                    <input type="text" id="surname" name="surname" class="form-control rounded">
                                </div>
                                <div class="col-md form-group">
                                    <label for="firstname">Prénom</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control rounded">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control rounded">
                                </div>
                                <div class="col-md form-group">
                                    <label for="privilege">Privilège</label>
                                    <input type="number" min="0" max="1" id="privilege" name="privilege" value="0" class="form-control rounded">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" id="username" name="username" class="form-control rounded">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="password">Nouveau mot de passe</label>
                                    <input type="password" id="password" name="password" placeholder="Entrer un nouveau mot de passe" class="form-control rounded">
                                </div>
                                <div class="col-md form-group">
                                    <label for="newPassword">Réécrire du mot de passe</label>
                                    <input type="password" id="newPassword" name="newPassword" placeholder="Réécrire le nouveau mot de passe" class="form-control rounded">
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-5 col-md-2">
                                    <input type="submit" value="Ajouter" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    <!-- Popper.JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
@endsection
