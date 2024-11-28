@extends('layout')

@section('page-content')
<h2>BOOKS</h2>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
@endif
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
            <a href="{{route('books.edit', $book)}}"><i class="bi bi-pencil-square"></i></a>
            <a href="{{ route('books.show', $book) }}"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    @endforeach

   
    

   
</table>
<a href="{{route('books.create')}}">Create Book</a>
   
@endsection
