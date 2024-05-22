@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <section>
        <div class="container p-5">
            <div class="row g-4">
                @foreach($comics as $comic)
                <div class="col-2">
                    <div class="card h-100">
                        <img src="{{$comic['thumb']}}" class="card-img-top comic_cover" alt="Comic cover">
                        <div class="card-body">
                            <p class="card-title fs-4">{{ $comic['title'] }}</p>
                            <p class="card-text">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection