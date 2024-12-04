@extends('layout')

@section('page-content')
<h2>BOOKS</h2>

<form method="GET" action="{{ route('books.search') }}">
    <input type="text" name="query" value="{{$search}}" placeholder="Search by title or author">
    <button type="submit">Search</button>
</form>

<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Author</td>
        <td>Price</td>
        <td>Available</td>
        <td>Pages</td>
        <td>Action</td>
    </tr>

    @foreach($books as $key => $book)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->qty}}</td>
        <td>{{$book->pages}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('books.edit', $book)}}">Edit</a>
            <form method="post" action="{{route('books.destroy', $book)}}" onsubmit="return confirm('Are you sure?');"">
                @csrf
                @method('DELETE')
                        <input type="hidden" class="form-control is-valid " value="{{$book->id}}" id="title" name="id"
                               placeholder="Title">
              
                        <button class="btn btn-danger" type="submit" class="btn btn-primary">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div class="pagination">
    {{ $books->links('pagination::bootstrap-4') }}
</div>

@endsection
