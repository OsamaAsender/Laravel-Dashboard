@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-4">Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{ $product ->id }}</td>
                <td>{{ $product ->name }}</td>
                <td>{{ $product ->description }}</td>
                <td>{{ $product ->category_name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product ->stock }}</td>
                <td><img src="{{ $product->image }}" alt="{{ $product->name }}" width="100"></td>
                <td>
                    <!-- Edit button -->
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">Details</a>
                    
                    <!-- Delete button -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
