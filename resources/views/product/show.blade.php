@extends('components.layout')

@section('title', 'Product Details')

@section('content')
    <div class="container mt-5">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Category:</strong> {{ $product->category_name }}</p>
                <p><strong>Price:</strong> ${{ $product->price }}</p>
                <p><strong>Image:</strong></p>
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid" style="max-width: 300px;">
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Products</a>
    </div>
@endsection