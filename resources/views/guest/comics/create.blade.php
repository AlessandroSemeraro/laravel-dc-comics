@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="d-flex justify-content-center col-12">
            <form  action="{{route('guest.comics.store')}}" method="POST">
                @csrf
                <div class="mb-4 d-flex justify-content-between" >
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" name="description" id="description" ></textarea>
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="thumb" class="form-label">Image url:</label>
                    <input type="text" name="thumb" id="thumb">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="series" class="form-label">Series:</label>
                    <input type="text" name="series" id="series">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="sale_date" class="form-label">Sale date:</label>
                    <input type="text" name="sale_date" id="sale_date">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" name="type" id="type">
                </div>
                <button type="button" class="me-3 btn btn-success">Submit</button>  
                </div>
            </form>
        </div>
    </div>

</section>
@endsection