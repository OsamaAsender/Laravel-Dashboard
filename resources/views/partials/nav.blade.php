<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand primary" href="{{ url('/') }}">Seize</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Contact</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/') }}">Log In</a>
                    </li>
                @else
                    <li class="nav-item">
                        <span class="nav-link">Welcome, {{ Auth::user()->name }}!</span>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ url('/') }}">
                        🛒
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
                            {{ session('cart') ? count(session('cart')) : 0 }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
