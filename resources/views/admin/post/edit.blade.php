@extends('admin.layouts.app')
@section('title', 'Пост')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Посты | {{ $post->title }} | <strong>Обновление</strong></div>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="category_title" class="form-label">Заголовок поста</label>
                                <input type="text" name="title" class="form-control" id="category_title"
                                    value="{{ $post->title }}">
                                @error('title')
                                    <div id="category_title" class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3 w-100">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea2" name="content" style="height: 200px; width: 400px">{{ $post->content }}</textarea>
                                    <label for="floatingTextarea2">Контент</label>
                                </div>
                                @error('content')
                                <div id="category_title" class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" value="Обновить" class="btn btn-primary me-3">
                                <a href="{{ route('admin.post.index') }}" class="btn btn-secondary">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
