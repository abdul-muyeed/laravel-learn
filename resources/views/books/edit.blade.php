@extends('layout')

@section('page-content')
    <div class="container mt-5">
        <h2 class="mb-4">Edit Book</h2>
        <div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="card w-75 mx-auto">
            <div class="card-header">
                Book Details
            </div>
            <div class="card-body">
                <form method="post" action="{{route('books.update', $book)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$book->title}}" id="title" name="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="author" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$book->author}}" id="author" name="author" placeholder="Author">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" step="0.01" class="form-control" value="{{$book->price}}" id="price" name="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="qty" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{$book->qty}}" id="qty" name="qty" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="pages" class="col-sm-2 col-form-label">Pages</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{$book->pages}}" id="pages" name="pages" placeholder="Pages">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



