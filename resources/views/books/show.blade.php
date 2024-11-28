@extends('layout')

@section('page-content')
    <h2>Create Book</h2>
    
    <form method="post" action="{{route('books.destroy', $book)}}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <label for="title" class="control-label">Do you want to delete "{{$book->title}}" Book</label>
            <div class="col-sm-10">
                <input type="hidden" class="form-control is-valid " value="{{$book->id}}" id="title" name="id"
                       placeholder="Title">
                {{-- <div class="invalid-feedback">Error message</div> --}}
            </div>
           
            <br>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </div>

            </div>
        </div>

        <div class="form-group">
            
    </form>

@endsection



