@extends('layouts.header')

@section('title', 'Kitap Maglumaty |')

@section('content')
    <div class="card shadow-sm border-0 p-4 bg-white">
        <div style="display: flex; gap: 3rem;">
            <div class="position-relative mb-3">
                <img src="{{ asset('img/book1.jpg') }}" class="w-30 rounded-3" alt="{{ $book->name }}" style="height: 180px; object-fit: cover;">
            </div>
  {{-- s  --}}

  {{-- rr --}}
            <div>
                <h2 class="text-success mb-3 fw-bold">{{ $book->name }}</h2>
                <hr>
                <p class="h6 mb-2"><strong>Awtor:</strong> {{ $book->author->name }} {{ $book->author->surname }}</p>
                <p class="h6 mb-2"><strong>Neşir ediji:</strong> {{ $book->publisher->name }}</p>
                <p class="h6 mb-2"><strong>Kategoriýa:</strong> {{ $book->category->name }}</p>
                <p class="h6 mb-2"><strong>Kitap Kody:</strong> {{ $book->code }}</p>
                <p class="h6 mb-2"><strong>Dili:</strong> {{ $book->language->name }}</p>
                <p class="h6 mb-2"><strong>Çap ýyly:</strong> {{ $book->year->name }}</p>
                <p class="h6 mb-2"><strong>Sahypa sany:</strong> {{ $book->page_number }}</p>
                <div class="mt-4">
                    <a href="{{ route('books.index') }}" class="btn btn-secondary px-4">Yza gaýt</a>
                </div>
            </div>
        </div>
    </div>
@endsection