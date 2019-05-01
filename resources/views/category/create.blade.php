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

                        <form method="POST" action="{{ route('categorie.store') }}" class="form-group">
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="label">Libellé de la catégorie</label>
                                    <input type="text" id="label" name="label"
                                           class="form-control rounded {{ $errors->has('label') ? ' is-invalid' : '' }}"
                                           value="{{ old('label') }}">
                                    @if ($errors->has('label'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('label') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="adultPrice">Prix adulte des équipements de la catégorie</label>
                                    <input type="number" min="0" step="0.01" id="adultPrice" name="adultPrice"
                                           class="form-control rounded {{ $errors->has('adultPrice') ? ' is-invalid' : '' }}"
                                           value="{{ old('adultPrice') ? old('adultPrice') : 0 }}">
                                    @if ($errors->has('adultPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adultPrice') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="childrenPrice">Prix enfant des équipements de la catégorie</label>
                                    <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"
                                           class="form-control rounded {{ $errors->has('childrenPrice') ? ' is-invalid' : '' }}"
                                           value="{{ old('childrenPrice') ? old('childrenPrice') : 0 }}">
                                    @if ($errors->has('childrenPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('childrenPrice') }}</strong>
                                    </span>
                                    @endif
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
    <!-- jQuery Custom Scroller CDN -->
    <script defer
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
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
