@extends('layouts.app')
@section('title', 'Пост')

@section('content')
    @include('user.includes.menu', ['some' => 'countPost'])
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div><strong>{{ $post->title }}</strong></div>
                    <a href="{{ route('personal.liked.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="w-50">
                        <div class="form-group">
                            <label for="category_title" class="form-label">Заголовок поста</label>
                            <input type="text" name="title" class="form-control" id="category_title"
                                   value="{{ $post->title }}" readonly>
                        </div>
                        <div class="form-group mt-3 w-100">
                            <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea2" name="content"
                                              style="height: 200px; width: 400px"
                                              readonly>{{ $post->content }}</textarea>
                                <label for="floatingTextarea2">Контент</label>
                            </div>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" name="" id="" value="{{ $post->category->title }}"
                                   readonly>
                            <label for="floatingSelect">Категория</label>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select mt-3" name="tag_ids[]" multiple="multiple"
                                    aria-label="Выберите тэги" data-placeholder="Выберите тэги" readonly="">
                                @foreach($tags as $tag)
                                    <option
                                        {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="formFile" class="form-label">Главное изображение</label>
                            <div class="mt-3">
                                <img src="{{ asset('storage/'. $post->main_image) }}" alt="preview_image"
                                     class="img-thumbnail w-25">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="formFile" class="form-label">Обложка</label>
                            <div class="mt-2">
                                <img src="{{ asset('storage/'. $post->preview_image) }}" alt="main_image"
                                     class="img-thumbnail w-25">
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="badge bg-primary" style="width: 12rem; font-size: 14px;">Комментарии</div>
                            @if(collect($comments)->isEmpty())
                                <div class="fw-semibold mt-2 mb-3 alert alert-danger text-dark">Этот пост ещё никто не комментировал</div>
                            @else
                                @foreach($comments as $comment)
                                    <div class="fw-semibold mt-2 mb-3 alert alert-info text-dark">{{ $comment->comment }}</div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
