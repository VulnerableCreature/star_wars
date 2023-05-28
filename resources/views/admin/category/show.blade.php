@extends('admin.layouts.app')
@section('title', 'Категория')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Категории | {{ $category->title }}</div>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="form-group">
                        <label for="category_title" class="form-label">Название категории</label>
                        <input type="text" name="title" class="form-control" id="category_title"
                            value="{{ $category->title }}" readonly>
                        <a href="{{ route('admin.category.edit', $category->id) }}"
                            class="btn btn-primary mt-3">Редактировать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
