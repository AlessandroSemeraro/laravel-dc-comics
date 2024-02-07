@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col8 d-flex justify-content-center">
            <form action="">
                <div class="mb-2">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="mb-2">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description">
                </div>
                <div class="mb-2">
                    <label for="thumb">Image url:</label>
                    <input type="text" name="thumb" id="thumb">
                </div>
                <div class="mb-2">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price">
                </div>
                <div class="mb-2">
                    <label for="series">Series:</label>
                    <input type="text" name="series" id="series">
                </div>
                <div class="mb-2">
                    <label for="sale_date">Sale date:</label>
                    <input type="text" name="sale_date" id="sale_date">
                </div>
                <div class="mb-2">
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type">
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</section>
@endsection