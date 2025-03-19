@extends('layouts.app')

@section('title', 'تعديل التصنيف')

@section('content')
    <div class="container">
        <h1>تعديل التصنيف</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">اسم التصنيف</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">الوصف</label>
                <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $category->price }}" required>
            </div>
            <button type="submit" class="btn btn-success">تعديل</button>
        </form>
    </div>
@endsection
