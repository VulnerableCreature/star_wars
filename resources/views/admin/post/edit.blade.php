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
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <textarea class="form-control" id="floatingTextarea2" name="content"
                                              style="height: 200px; width: 400px">{{ $post->content }}</textarea>
                                    <label for="floatingTextarea2">Контент</label>
                                </div>
                                @error('content')
                                <div id="category_title" class="text-danger">Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <select class="form-select" id="floatingSelect" aria-label="" name="category_id">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Выберите категорию</label>
                            </div>
                            <div class="form-group mt-3">
                                <select class="form-select mt-3" name="tag_ids[]" multiple="multiple"
                                        aria-label="Выберите тэги" data-placeholder="Выберите тэги">
                                    @foreach($tags as $tag)
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="formFile" class="form-label">Главное изображение</label>
                                <input class="form-control" value="{{ $post->main_image }}" type="file" id="formFile" name="main_image">
                                <div class="mt-3">
                                    <img src="{{ asset('storage/'. $post->main_image) }}" alt="preview_image" class="img-thumbnail w-25">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="formFile" class="form-label">Обложка</label>
                                <input class="form-control" type="file" value="{{ $post->preview_image }}" id="formFile" name="preview_image">
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'. $post->preview_image) }}" alt="main_image" class="img-thumbnail w-25">
                                </div>
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" value="Обновить" class="btn btn-primary me-3">
                                <a href="{{ route('admin.post.show', $post->id) }}"
                                   class="btn btn-primary me-3">К посту</a>
                                <a href="{{ route('admin.post.index') }}" class="btn btn-secondary me-3">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
