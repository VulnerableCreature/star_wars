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
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>It's the post</div>
                    <div class="justify-content-end">
                        <a href="" class="btn btn-primary">Просмотреть</a>
                        <a href="" class="btn btn-primary">Редактировать</a>
                        <a href="" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
