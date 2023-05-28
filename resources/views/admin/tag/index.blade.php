@extends('admin.layouts.app')
@section('title', 'Тэги')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Тэги</div>
                    <a href="{{ route('admin.tag.create') }}" class="btn btn-outline-primary">Создать</a>
                </div>
                <div class="card-body">
                    @foreach ($tags as $tag)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>{{ $tag->title }}</div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.tag.show', $tag->id) }}"
                                    class="btn btn-primary mx-2">Просмотреть</a>
                                <a href="{{ route('admin.tag.edit', $tag->id) }}"
                                    class="btn btn-primary mx-3">Редактировать</a>
                                <form action="{{ route('admin.tag.destroy', $tag->id) }}" method="POST">
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
