@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <section>
        <div class="container p-5">
            <div class="row">
                @foreach($comics as $comic)
                <div class="card col-2">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="Comic cover">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['series'] }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection