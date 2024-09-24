@extends('layouts.app')

@section('content')
    <div class="bg-jumbo">
    </div>

    <div class="bg-dark">
        <div class="container py-5 d-flex flex-column">
            <div class="row text-center">
                <div class="comics d-flex flex-wrap mt-5">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="comic-thumb">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <p class="text-white"> {{ $comic['title'] }} </p>
                        </div>
                    @endforeach
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-sm mt-5"> LOAD MORE </button>
                </div>
            </div>
        </div>
    </div>
@endsection
