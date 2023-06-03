@extends('admin.layouts.app')
@section('title', 'Посты')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Посты</div>
                    <a href="{{ route('admin.post.create') }}" class="btn btn-outline-primary">Создать</a>
                </div>
                <div class="card-body">
                    @foreach ($posts as $post)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>{{ $post->title }}</div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.post.show', $post->id) }}"
                                   class="btn btn-primary me-3">Просмотреть</a>
                                <a href="{{ route('admin.post.edit', $post->id) }}"
                                   class="btn btn-primary me-3">Редактировать</a>
                                <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
