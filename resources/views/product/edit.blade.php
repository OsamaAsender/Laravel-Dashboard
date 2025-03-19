@extends('components.layout')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-5">
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="category_name" class="form-label">Category</label>
            <input type="text" id="category_name" name="category_name" value="{{ $product->category_name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" id="image" name="image" value="{{ $product->image }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
