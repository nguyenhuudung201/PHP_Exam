<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooKController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if (isset($request->title) && ($request->title != null)) {
            $query->where('title', 'like',  '%' . $request->title . '%');
        }
        $books = $query->get();
        return view('welcome', compact('books'));
    }
}
