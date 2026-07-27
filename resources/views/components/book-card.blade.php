<div class="col">
    <a href="{{ route('books.show', $book->id) }}" class="d-block h-100 text-decoration-none">
        <div class="border-0 p-3 rounded-4 h-100 bg-white shadow-sm d-flex flex-column">
            
            <div class="position-relative mb-3">
                <img src="{{ asset('img/book1.jpg') }}" class="w-100 rounded-3" alt="{{ $book->name }}" style="height: 180px; object-fit: cover;">
                <span class="badge bg-success shadow-sm position-absolute top-0 start-0 m-2">
                    {{ $book->category->name }}
                </span>
            </div>
            
            <div class="h6 text-dark fw-bold mb-1">
                {{ $book->name }}
            </div>

            <div class="small text-muted mb-1 text-truncate">
                <i class="bi bi-person"></i> Awtor: {{ $book->author->name }} {{ $book->author->surname }}
            </div>
            
            <div class="small text-muted mb-2 text-truncate">
                <i class="bi bi-code-slash"></i> {{ $book->code }}
            </div>
            
            <div class="d-flex justify-content-between align-items-center small text-success mb-3 mt-auto">
                
                <div>
                    <i class="bi bi-file-earmark-text"></i> Sahypa: {{ $book->page_number }}
                </div>

                <div>
                    <i class="bi bi-calendar-event"></i> Çap ýyly: {{ $book->year->name }}
                </div>

            </div>

            <div class="btn btn-success btn-sm w-100 py-2 fw-medium">Giňişleýin oka</div>
            
        </div>
    </a>
</div>