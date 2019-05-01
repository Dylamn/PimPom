@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" style="padding-top: 3%" id="side">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier un équipement</div>
                    <div class="card-body">
                        <form method="POST" action="{{ Route('equipements.update', ['equipment' => $equipement->id]) }}" class="form-group">
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
                                    <label for="adultPrice">État de l'équipement</label>
                                    <SELECT name="statusId" id="statusId" class="form-control rounded" {{ $errors->has('statusId') ? 'is-invalid' : '' }}>
                                        <option value="1" @if($equipement->statusId == 1) selected @endif>Disponible</option>
                                        <option value="2" @if($equipement->statusId == 2) selected @endif>Réservé</option>
                                        <option value="3" @if($equipement->statusId == 3) selected @endif>En réparation</option>
                                    </SELECT>
                                    {{--<input type="number" min="0" step="0.01" id="adultPrice" name="adultPrice"--}}
                                    {{--value="{{ old('adultPrice') ? old('adultPrice') : $equipement->adultPrice}}"--}}
                                    {{--class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">--}}

                                    {{--@if ($errors->has('adultPrice'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                    {{--<strong>{{ __($errors->first('adultPrice')) }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
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
