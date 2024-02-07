@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $comic->title }}
                            </h1>
                            <div class="card-image">
                                <img class="w-50" src="{{  $comic->thumb }}" alt="{{ $comic->title }}'s picture">
                            </div>
                            <p>
                                Description: {{ $comic->description }}
                            </p>
                            <p>
                                Series: {{ $comic->series }}
                            </p>
                            <p>
                                Type: {{ $comic->type }}
                            </p>

                            <p>
                                Price: {{ $comic->price }}
                            </p>
                            <a href="{{route('guest.comics.edit' , $comic->id)}}">
                                <button type="button" class="btn btn-info">Edit Comic</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

