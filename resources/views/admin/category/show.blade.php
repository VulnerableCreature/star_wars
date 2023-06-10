@extends('admin.layouts.app')
@section('title', 'Категория')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Категории | <strong>{{ $category->title }}</strong></div>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="form-group">
                            <label for="category_title" class="form-label">Название категории</label>
                            <input type="text" name="title" class="form-control" id="category_title"
                                value="{{ $category->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="category_created" class="form-label">Дата создания</label>
                            <input type="text" name="title" class="form-control" id="category_created"
                                value="{{ $dateCreated->day }} {{ $dateCreated->translatedFormat('F') }} {{ $dateCreated->year }} {{ $dateCreated->format('H:i') }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="category_updated" class="form-label">Дата изменения</label>
                            <input type="text" name="title" class="form-control" id="category_updated"
                                value="{{ $dateUpdated->day }} {{ $dateUpdated->translatedFormat('F') }} {{ $dateUpdated->year }} {{ $dateUpdated->format('H:i') }}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('admin.category.edit', $category->id) }}"
                                class="btn btn-primary mt-3">Редактировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
