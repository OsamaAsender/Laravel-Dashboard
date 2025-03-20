@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container mt-5">
    <h2>Create Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter product description">
    </div>

    <div class="mb-3">
        <label for="category_name" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Enter product price">
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock Quantity</label>
        <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter stock quantity">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Create Product</button>
</form>

</div>
@endsection
