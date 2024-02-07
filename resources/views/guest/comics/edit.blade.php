@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="d-flex justify-content-center col-12">
            <form  action="{{route('guest.comics.update', $comic->id)}}" method="POST">
                @csrf
                @method ('PUT')
                <div class="mb-4 d-flex justify-content-between" >
                    <label for="title" class="form-label">Edit title:</label>
                    <input type="text" name="title" id="title" value="{{$comic->title}}">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="description" class="form-label">Edit description:</label>
                    <textarea type="text" name="description" id="description" >{{$comic->description}}</textarea>
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="thumb" class="form-label">Change Image url:</label>
                    <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="price" class="form-label">Edit price:</label>
                    <input type="text" name="price" id="price" value="{{$comic->price}}">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="series" class="form-label">Edit series:</label>
                    <input type="text" name="series" id="series" value="{{$comic->series}}">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="sale_date" class="form-label">Edit sale date:</label>
                    <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="type" class="form-label">Edit type:</label>
                    <input type="text" name="type" id="type" value="{{$comic->type}}">
                </div>
                <button class="mb-4 btn btn-success">Edit now</button>
            </form>
        </div>
    </div>

</section>
@endsection