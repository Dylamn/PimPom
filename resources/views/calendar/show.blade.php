@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="p-3">
            <pre>
                {{ print_r($rents[0]) }}
            </pre>
        @foreach($rents as $rent)

        @endforeach
    </div>
@endsection
