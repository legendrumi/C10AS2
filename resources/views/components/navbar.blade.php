<nav class="navbar navbar-expand-lg sticky-top shadow py-3" style="background: linear-gradient(135deg, #090333 0%, #1a1040 50%, #2A7B9B 100%);" data-bs-theme="dark">
    <div class="container-xxl">
        
        <a class="navbar-brand fw-bold fs-4 d-flex align-items-center gap-2 text-white" href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="40" height="40">
                <rect x="5" y="5" width="90" height="90" rx="20" fill="#FFCC00"/>
                <circle cx="35" cy="45" r="12" fill="none" stroke="#090333" stroke-width="4"/>
                <circle cx="65" cy="45" r="12" fill="none" stroke="#090333" stroke-width="4"/>
                <circle cx="35" cy="45" r="4" fill="#090333"/>
                <circle cx="65" cy="45" r="4" fill="#090333"/>
                <path d="M 50 55 L 58 65 L 42 65 Z" fill="#090333"/>
                <text x="50" y="85" font-family="sans-serif" font-weight="bold" font-size="14" fill="#090333" text-anchor="middle">DOKI</text>
            </svg>
            <span>Doki Kitaphanasy</span>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <div class="d-flex justify-content-center flex-grow-1 my-2 my-lg-0 px-lg-3">
                <form class="d-flex" style="width: 100%; max-width: 380px;" action="{{ route('books.index') }}" method="GET" role="search">
                    <input class="form-control me-2 bg-dark border-secondary text-light shadow-none" 
                        type="search" 
                        name="search" 
                        value="{{ request('search') }}" 
                        placeholder="Gözleg: at, kod..." />
                    <button class="btn btn-outline-success px-4 fw-bold" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>

            <ul class="navbar-nav mb-2 mb-lg-0 gap-2 align-items-lg-center ms-auto ms-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-pill fw-medium d-flex align-items-center gap-2 {{ request()->is('/') ? 'bg-white text-dark shadow-sm' : 'text-white-50' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door text-warning"></i> Baş sahypa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-pill fw-medium d-flex align-items-center gap-2 {{ request()->is('books*') ? 'bg-white text-dark shadow-sm' : 'text-white-50' }}" href="{{ route('books.index') }}">
                        <i class="bi bi-journal-text text-info"></i> Kitaplar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-pill fw-medium d-flex align-items-center gap-2 {{ request()->is('authors*') ? 'bg-white text-dark shadow-sm' : 'text-white-50' }}" href="{{ route('authors.index') }}">
                        <i class="bi bi-person-lines-fill text-success"></i> Awtorlar
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>