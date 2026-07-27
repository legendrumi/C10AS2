<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Year;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => ['nullable', 'string'],
            'category' => ['nullable', 'integer'],
            'author' => ['nullable', 'integer'],
            'publisher' => ['nullable', 'integer'],
            'year' => ['nullable', 'integer'],
            'page_count' => ['nullable', 'integer'],
            'sortBy' => ['nullable', 'string', 'in:newest,oldest,name_asc,name_desc'],
        ]);

        $sortByType = $request->sortBy ? $request->sortBy : 'newest';

        $query = Book::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('code', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('author')) {
            $query->where('author_id', $request->author);
        }

        if ($request->filled('publisher')) {
            $query->where('publisher_id', $request->publisher);
        }

        if ($request->filled('year')) {
            $query->where('year_id', $request->year);
        }

        if ($request->filled('page_count')) {
            $query->where('page_number', '<=', $request->page_count);
        }

        if ($sortByType == 'oldest') {
            $query->orderBy('id', 'asc');
        } else if ($sortByType == 'name_asc') {
            $query->orderBy('name', 'asc');
        } else if ($sortByType == 'name_desc') {
            $query->orderBy('name', 'desc');
        } else {
            $query->orderBy('id', 'desc');
        }

        $books = $query->paginate(24)->withQueryString();

        $categories = Category::orderBy('name')->get();
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::orderBy('name')->get();
        $years = Year::orderBy('name', 'desc')->get();

        $sorts = [
            'newest' => 'Täzeler',
            'oldest' => 'Köneler',
            'name_asc' => 'Ady (A-Z)',
            'name_desc' => 'Ady (Z-A)'
        ];

        return view('books.index', compact(
            'books',
            'categories',
            'authors',
            'publishers',
            'years',
            'sorts'
        ));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}