@extends('layouts.public')

@section('content')
    <section class="hero-section">
        <div class="hero-content">
            <h1>Seize</h1>
            <p>Find the perfect bag for every occasion. Stylish, durable, and made for you.</p>
            <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
    </section>
    <section id="new-arrivals">
    <h2 class="mb-5">New Arrivals</h2>
    <div class="row new-cards">

        @foreach ([
            ['image' => 'bag1.jpg', 'title' => 'Elegant Leather Bag', 'price' => '$79.99'],
            ['image' => 'bag2.jpg', 'title' => 'Casual Tote Bag', 'price' => '$49.99'],
            ['image' => 'bag3.jpg', 'title' => 'Stylish Handbag', 'price' => '$99.99']
        ] as $bag)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/' . $bag['image']) }}" class="card-img-top fixed-img" alt="{{ $bag['title'] }}">

                <div class="card-body text-center">
                    <h5 class="card-title">{{ $bag['title'] }}</h5>
                    <p class="card-text price">{{ $bag['price'] }}</p>

                    <!-- Add to cart and favorite buttons -->
                    <div class="card-buttons">
                    <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                    <button class="favorite-btn"><i class="fas fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<footer class="footer text-light py-4">
    <div class="container text-start">
        <div class="row">
            <!-- Logo & About -->
            <div class="col-md-4">
                <h5>Seize</h5>
                <p>Discover the finest collection of stylish bags at unbeatable prices.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Home</a></li>
                    <li><a href="#" class="text-light">Shop</a></li>
                    <li><a href="#" class="text-light">About Us</a></li>
                    <li><a href="#" class="text-light">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <a href="#" class="text-light mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-twitter fa-lg"></i></a>
            </div>
        </div>
        <hr class="bg-light">
        <p class="mb-0  text-center">&copy; {{ date('Y') }} BagStore. All rights reserved.</p>
    </div>
</footer>


@endsection