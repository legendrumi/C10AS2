<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => ['nullable', 'string'],
        ]);

        $f_search = $request->search ?? null;

        $authors = Author::when($f_search, function ($query) use ($f_search) {
            return $query->where('name', 'like', '%' . $f_search . '%')
                ->orWhere('surname', 'like', '%' . $f_search . '%');
        })
            ->paginate(24)
            ->withQueryString();

        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show', compact('author'));
    }
}