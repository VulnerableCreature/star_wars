@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center text-center alert alert-light border border-dark mb-3">
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Пользователи</a>
            </div>
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Посты</a>
            </div>
            <div class="col mx-2">
                <a href="{{ route('admin.category.index') }}" class="btn btn-outline-dark">Категории</a>
            </div>
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Тэги</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>Admin panel | Category</div>
                        <a href="" class="btn btn-outline-primary">Создать</a>
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
    </div>
    </div>
@endsection
