@extends('components.layout')

@section('title', 'Create Product')

@section('content')
<div class="container mt-5">
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="category_name" class="form-label">Category</label>
            <input type="text" id="category_name" name="category_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" id="image" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
