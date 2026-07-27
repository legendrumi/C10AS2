@extends('layouts.header')

@section('title', 'Awtorlar |')

@section('content')
    <div class="h4 text-info mt-4 mb-3 fw-bold">
        <i class="bi bi-pencil-square"></i> <span style="color: aqua;">Doki Kitaphanasy - Awtorlar Sanawy</span>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4 mb-4">
        @foreach ($authors as $author)
            <div class="col">
                <a href="{{ route('authors.show', $author->id) }}" class="d-flex flex-column text-decoration-none text-dark border border-1 border-secondary p-3 rounded-3 h-100 bg-white shadow-sm text-center">
                    
                    <div class="mb-3">
                        <img src="{{ asset('img/author.jpg') }}" class="w-100 rounded-3" alt="{{ $author->name }}" style="height: 180px; object-fit: cover;">
                    </div>

                    <div class="fw-bold text-success">
                        {{ $author->name }} {{ $author->surname }}
                    </div>
                    <div class="small text-muted mt-1 mb-3">
                        {{ $author->birth_date }} - {{ $author->death_date ?? 'häzir' }}
                    </div>

                    <div class="btn btn-success btn-sm w-100 py-2 fw-medium mt-auto">Giňişleýin oka</div>
                </a>
            </div>
        @endforeach
    </div>
@endsection