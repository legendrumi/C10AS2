@extends('layouts.header')

@section('title', 'Kitaplar |')

@section('content')
<div class="container-xxl py-4">
    
    <div class="h5 text-info mb-4 fw-bold">
        <i class="bi bi-book-half me-2"></i> <span style="color: aqua;">Doki Kitaphanasy - Kitaplar Sanawy</span>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-3">
            @include('components.filter-search')
        </div>

        <div class="col-lg-9">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                @foreach ($books as $book)
                    @include('components.book-card')
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $books->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection