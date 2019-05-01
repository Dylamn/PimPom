@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" style="padding-top: 3%" id="side">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier une catégorie</div>
                    <div class="card-body">
                        <form method="POST" action=" {{ route('utilisateurs.update', ['user' => $user->id]) }}" class="form-group">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{ $user->id }}">
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="surname">Nom</label>
                                    <input type="text" id="surname" name="surname" value="{{ $user->surname }}"
                                           class="form-control rounded {{ $errors->has('surname') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('surname')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="firstname">Prénom</label>
                                    <input type="text" id="firstname" name="firstname" value="{{ $user->firstName }}"
                                           class="form-control rounded {{ $errors->has('firstname') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('firstname')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email}}"
                                           class="form-control rounded {{ $errors->has('email') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('email')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="privilege">Privilège</label>
                                    <input type="number" min="0" max="1" id="privilege" name="privilege" value="{{ $user->privilege }}"
                                           class="form-control rounded {{ $errors->has('privilege') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('privilege'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('privilege')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" id="username" name="username" value="{{ $user->username}}" class="form-control rounded" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="password">Nouveau mot de passe</label>
                                    <input type="password" id="password" name="password" placeholder="Entrer un nouveau mot de passe"
                                           class="form-control rounded {{ $errors->has('password') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('password')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="password_confirmation">Confirmation du mot de passe</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Réécrire le nouveau mot de passe"
                                           class="form-control rounded">

{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ __($errors->first('password')) }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-5 col-md-2">
                                    <input type="submit" value="Modifier" class="btn btn-primary">
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
