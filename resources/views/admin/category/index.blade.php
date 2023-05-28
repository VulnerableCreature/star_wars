@extends('admin.layouts.app')
@section('title', 'Категории')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Категории</div>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-outline-primary">Создать</a>
                </div>
                <div class="card-body">
                    @foreach ($categories as $category)
                        <div class="d-flex justify-content-between align-items-center mb-2 alert">
                            <div>{{ $category->title }}</div>
                            <div class="justify-content-end">
                                <a href="{{ route('admin.category.show', $category->id) }}"
                                    class="btn btn-primary">Просмотреть</a>
                                <a href="{{ route('admin.category.edit', $category->id) }}"
                                    class="btn btn-primary">Редактировать</a>
                                <a href="" class="btn btn-danger">Удалить</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
