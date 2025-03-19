@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-5">
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea id="description" name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" id="image" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>


</div>
@endsection
