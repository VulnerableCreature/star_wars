@extends('admin.layouts.app')
@section('title', 'Посты | Создание')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Посты | Создание</div>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <form action="{{ route('admin.post.store') }}" method="POST" class="w-50" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_title" class="form-label">Заголовок поста</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="category_title">
                            @error('title')
                                <div id="category_title" class="text-danger">Это поле обязательно для заполнения</div>
                            @enderror
                            <div id="category_title" class="form-text">Заголовок поста не должен повторяться. Поле
                                уникальное
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="" id="floatingTextarea2" name="content" style="height: 100px">{{ old('content') }}</textarea>
                                <label for="floatingTextarea2">Контент</label>
                            </div>
                            @error('content')
                            <div id="category_title" class="text-danger">Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="formFile" class="form-label">Обложка</label>
                            <input class="form-control" type="file" id="formFile" name="preview_image">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="formFile" class="form-label">Главное изображение</label>
                            <input class="form-control" type="file" id="formFile" name="main_image">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Создать" class="btn btn-primary mt-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
