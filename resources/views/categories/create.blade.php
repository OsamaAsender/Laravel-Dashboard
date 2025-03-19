@extends('layouts.app')

@section('title', 'إضافة تصنيف جديد')

@section('content')
    <div class="container">
        <h1>إضافة تصنيف جديد</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">اسم التصنيف</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">الوصف</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
        </form>
    </div>
@endsection
