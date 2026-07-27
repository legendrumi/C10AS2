<div class="card border-0 shadow-sm rounded-4 p-4 bg-white sticky-top" style="top: 90px; z-index: 10;">
    <form method="GET" action="{{ route('books.index') }}">
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="fw-bold text-dark fs-6">
                <i class="bi bi-funnel text-success me-2"></i> Filterler
            </span>
            <a href="{{ route('books.index') }}" class="text-muted text-decoration-none small">Arassala!</a>
        </div>

        <hr class="text-muted opacity-25 mb-4">

        @if(request('search'))
            <input type="hidden" name="search" value="{{ request('search') }}">
        @endif

        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Tertiple</label>
            <select name="sortBy" class="form-select bg-light border-0 shadow-none text-secondary">
                @foreach ($sorts as $sortKey => $sortName)
                    <option value="{{ $sortKey }}" {{ request('sortBy') == $sortKey ? 'selected' : '' }}>
                        {{ $sortName }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Kategoriýa</label>
            <select name="category" class="form-select bg-light border-0 shadow-none text-secondary">
                <option value="">Ählisi</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Awtor</label>
            <select name="author" class="form-select bg-light border-0 shadow-none text-secondary">
                <option value="">Ählisi</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                        {{ $author->name }} {{ $author->surname }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Neşirýat</label>
            <select name="publisher" class="form-select bg-light border-0 shadow-none text-secondary">
                <option value="">Ählisi</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ request('publisher') == $publisher->id ? 'selected' : '' }}>
                        {{ $publisher->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Neşir ýyly</label>
            <select name="year" class="form-select bg-light border-0 shadow-none text-secondary">
                <option value="">Ählisi</option>
                @foreach($years as $year)
                    <option value="{{ $year->id }}" {{ request('year') == $year->id ? 'selected' : '' }}>
                        {{ $year->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="form-label small fw-semibold text-secondary">Sahypa sany</label>
            <input type="number" name="page_count" value="{{ request('page_count') }}" class="form-control bg-light border-0 shadow-none text-secondary" placeholder="Meselem: 300">
        </div>
        
        <button type="submit" class="btn btn-success w-100 fw-semibold py-2">
            Filterle!
        </button>

    </form>
</div>