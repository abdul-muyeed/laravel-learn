@extends('layout')

@section('page-content')
<div class="container mt-4">
    <h2 class="mb-4">BOOKS</h2>

    <form method="GET" action="{{ route('books.search') }}" class="form-inline mb-4">
        <div class="form-group mr-2">
            <input type="text" name="query" value="{{$search}}" class="form-control" placeholder="Search by title or author">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
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
                            <form method="post" action="{{route('books.destroy', $book)}}" onsubmit="return confirm('Are you sure?');" class="d-inline">
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
        </div>
    </div>

    <div class="pagination justify-content-center mt-4">
        {{ $books->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
