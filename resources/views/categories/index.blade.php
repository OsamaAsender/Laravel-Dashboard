@extends('layouts.app')

@section('title', 'التصنيفات')

@section('content')
    <div class="container">
        <h1>قائمة التصنيفات</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">إضافة تصنيف جديد</a>

        <table class="table">
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>الوصف</th>
                    <th>السعر</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->price }}</td> <!-- عرض السعر هنا -->
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">تعديل</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
