<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view("welcome", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=> "required",
            "author"=> "required",
            "price"=> "required",
            "qty"=> "required",
            "pages"=> "required"
        ]);
        $book = Book::create($request->all());
        return redirect()->route("home")->with("success","Book created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view("books.show", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view("books.edit", compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title"=> "required",
            "author"=> "required",
            "price"=> "required",
            "qty"=> "required",
            "pages"=> "required"
        ]);
        $book = Book::find($id);
        $book->update($request->all());
        $name = $book->title;
        return redirect()->route("home")->with("success"," $name Book updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $name = $book->title;
        $book->delete();
        return redirect()->route("home")->with("success"," $name Book deleted successfully");
    }
}
