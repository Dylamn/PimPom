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
                    <div class="card-header">Ajouter une catégorie</div>
                    <div class="card-body">

                        <form method="POST" action="/Pimpom/public/categories" class="form-group">
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="label">Libellé de la catégorie</label>
                                    <input type="text" id="label" name="label" class="form-control rounded">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="adultPrice">Prix adulte des équipements de la catégorie</label>
                                    <input type="number" min="0" step="0.01" id="adultPrice" name="adultPrice"
                                           class="form-control rounded">
                                </div>
                                <div class="col-md form-group">
                                    <label for="childrenPrice">Prix enfant des équipements de la catégorie</label>
                                    <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"
                                           class="form-control rounded">
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
