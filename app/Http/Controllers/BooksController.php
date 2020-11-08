<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function cariId($id)
    {
        $book = Book::where('id', $id)->first();
        if ($book) {
            return response()->json([
                $book
            ], 201);
        } else {
            return response()->json([
                'message' => 'Book Not Found'
            ], 404);
        }
    }
}
