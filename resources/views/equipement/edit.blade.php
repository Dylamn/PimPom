@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" style="padding-top: 3%" id="side">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier un équipement</div>
                    <div class="card-body">
                        <form method="POST" action="/equipements/{{ $equipement->id }}" class="form-group">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <input type="hidden" name="id" value="{{ $equipement->id }}">
                                    <label for="internalId">Référence</label>
                                    <input type="text" id="internalId" name="internalId"
                                           value="{{ old('internalId') ? old('internalId') : $equipement->internalId }}"
                                           class="form-control rounded {{ $errors->has('internalId') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('internalId'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('internalId')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="size">taille de l'équipement (en cm)</label>
                                    <input type="number" min="0" max="999" step="0.01" id="size" name="size"
                                           value="{{ old('size') ? old('size') : $equipement->size }}"
                                           class="form-control rounded {{ $errors->has('size') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('size'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('size')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="adultPrice">Prix adulte de l'équipement</label>
                                    <input type="number" min="0" step="0.01" id="adultPrice" name="adultPrice"
                                           value="{{ old('adultPrice') ? old('adultPrice') : $equipement->adultPrice}}"
                                           class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('adultPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('adultPrice')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="childrenPrice">Prix enfant de l'équipement</label>
                                    <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"
                                           value="{{ old('childrenPrice') ? old('childrenPrice') : $equipement->childrenPrice }}"
                                           class="form-control rounded {{ $errors->has('childrenPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('childrenPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('childrenPrice')) }}</strong>
                                    </span>
                                    @endif
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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
