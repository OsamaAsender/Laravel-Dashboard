<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">BagStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('welcome') }}">Log In</a>
                    </li>
                @else
                    <li class="nav-item">
                        <span class="nav-link">Welcome, {{ Auth::user()->name }}!</span>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('welcome') }}">
                        🛒 Cart
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
                            {{ session('cart') ? count(session('cart')) : 0 }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>