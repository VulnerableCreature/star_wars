@extends('admin.layouts.app')
@section('title', 'Категория')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Категории | {{ $category->title }} | <strong>Обновление</strong></div>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="category_title" class="form-label">Название категории</label>
                                <input type="text" name="title" class="form-control" id="category_title"
                                    value="{{ $category->title }}">
                                @error('title')
                                    <div id="category_title" class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                                <input type="submit" value="Обновить" class="btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
