@extends('layout')

@section('page-content')
<div class="container mt-5">
    <h2 class="mb-4">BOOKS</h2>
    <div class="d-flex justify-content-between mb-4">
        <a class="btn btn-success mx-2" href="{{route('books.create')}}">Create Book</a>
        <a class="btn btn-info mx-2" href="{{route('books.search')}}">Search</a>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success mb-4">
            {{session()->get('success')}}
        </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Available</th>
                <th>Pages</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $key => $book)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->qty}}</td>
                <td>{{$book->pages}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('books.edit', $book)}}">Edit</a>
                    <form method="post" action="{{route('books.destroy', $book)}}" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" class="form-control is-valid" value="{{$book->id}}" id="title" name="id" placeholder="Title">
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $books->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
