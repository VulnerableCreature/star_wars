@extends('admin.layouts.app')
@section('title', 'Тэг')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Тэг | {{ $tag->title }} | <strong>Обновление</strong></div>
                    <a href="{{ route('admin.tag.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="tag_title" class="form-label">Название категории</label>
                                <input type="text" name="title" class="form-control" id="tag_title"
                                    value="{{ $tag->title }}">
                                @error('title')
                                    <div id="tag_title" class="text-danger">Это поле обязательно для заполнения</div>
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
