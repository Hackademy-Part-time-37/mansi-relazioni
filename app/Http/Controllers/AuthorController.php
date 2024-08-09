<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     // $authors = Author::all();
    //     // return view('authors.create', compact('authors'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     Book::create([
    //         "title" => $request->title,
    //         "pages" => $request->pages,
    //         "author_id" => $request->author_id
    //     ]);

    //     return redirect()->route('books.index');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Book $book)
    // {
    //     return view('books.show', compact('book'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Book $book)
    // {
    //     $authors = Author::all();
    //     return view('books.edit', compact('book', 'authors'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Book $book)
    // {
    //     $book->update([
    //         "title" => $request->title,
    //         "pages" => $request->pages,
    //         "author_id" => $request->author_id
    //     ]);

    //     return redirect()->route('books.index');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
