@extends('layout')

@section('page-content')
    <h2>Create Book</h2>
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
    <form method="post" action="{{route('books.update', $book)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-valid " value="{{$book->title}}" id="title" name="title"
                       placeholder="Title">
                {{-- <div class="invalid-feedback">Error message</div> --}}
            </div>
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-valid " value="{{$book->author}}" id="author" name="author"
                       placeholder="Author">
                {{-- <div class="invalid-feedback">Error message</div> --}}
            </div>
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control is-valid " value="{{$book->price}}" id="price" name="price"
                       placeholder="Price">
                {{-- <div class="invalid-feedback">Error message</div> --}}
            </div>
            <label for="qty" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control is-valid " value="{{$book->qty}}" id="qty" name="qty"
                       placeholder="Quantity">
                {{-- <div class="invalid-feedback">Error message</div> --}}
            </div>
            <label for="pages" class="col-sm-2 control-label">Pages</label>
            <div class="col-sm-10">
                <input type="number" class="form-control is-valid " value="{{$book->pages}}" id="pages" name="pages"
                       placeholder="Pages">
                {{-- <div class="invalid-feedback">Error message</div> --}}
            </div>
            <br>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

            </div>
        </div>

        <div class="form-group">
            
    </form>

@endsection



