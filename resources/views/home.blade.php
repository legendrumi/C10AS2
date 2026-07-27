@extends('layouts.header')

@section('title', 'Baş Sahypa |')

@section('content')
<div class="row justify-content-center align-items-center py-5" style="min-height: 82vh;">
    <div class="col-lg-10" style="opacity: 0.75;">
        <div class="p-5 p-lg-5 rounded-4 shadow-lg border border-secondary border-opacity-10 text-center position-relative overflow-hidden" 
             style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 50%, #2c3e50 100%); min-height: 480px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            
            <div class="position-absolute top-0 start-50 translate-middle-x bg-info opacity-10 rounded-circle" style="width: 400px; height: 400px; filter: blur(80px); pointer-events: none;"></div>

            <div class="position-relative z-1 w-100 py-4">
                <h1 class="display-3 fw-bold text-white mb-4 tracking-tight" style="letter-spacing: -1px;">
                    Hoş geldiňiz, <span class="text-warning">Kitap söýüji!</span>
                </h1>
                
                <p class="fs-4 text-light opacity-85 mb-5 mx-auto" style="max-width: 750px; line-height: 1.6;">
                    Dünýädäki iň kämil we döwrebap <strong class="text-white">Doki</strong> Kitaphanasyna hoş geldiňiz! Bilim dünýäsine tarap ilkinji ädimi ädiň!
                </p>

                <div class="d-flex justify-content-center gap-4">
                    <a href="{{ route('books.index') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold shadow-sm fs-5">
                        <i class="bi bi-journal-text me-2"></i> Kitaplar
                    </a>
                    <a href="{{ route('authors.index') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold shadow-sm fs-5">
                        <i class="bi bi-person-lines-fill me-2"></i> Awtorlar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection