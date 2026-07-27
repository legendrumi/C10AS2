@extends('layouts.header')

@section('title', 'Awtor Maglumaty |')

@section('content')
    <div class="card shadow-sm border-0 p-4 bg-white">
        <div style="display: flex; gap: 3rem;">
            <div class="position-relative mb-3 flex-shrink-0" style="width: 180px;">
                <img src="{{ asset('img/author.jpg') }}" class="w-100 rounded-3" alt="{{ $author->name }}" style="height:170px; object-fit: cover;">
            </div>

            <div>
                <h3 class="text-success mb-3 fw-bold">{{ $author->name }} {{ $author->surname }}</h3>
                <hr>
                <p class="text-muted small">Doglan we aradan çykan ýyllary: {{ $author->birth_date }} - {{ $author->death_date ?? 'Ýaşaýar' }}</p>
                <div class="h6 mt-3">
                    <span class="text-success fw-bold">Biografiýasy:</span> {{ $author->bio }}
                </div>
                <div class="mt-4">
                    <a href="{{ route('authors.index') }}" class="btn btn-secondary px-4">Yza gaýt</a>
                </div>
            </div>
        </div>
    </div>
@endsection