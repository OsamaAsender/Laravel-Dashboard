@extends('components.layout')

@section('title', 'Delete Product')

@section('content')
<div class="container mt-5">
    <h1>Are you sure you want to delete this product?</h1>
    <p><strong>{{ $product->name }}</strong></p>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
