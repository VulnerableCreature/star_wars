@extends('admin.layouts.app')
@section('title', 'Пользователи')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Посты</div>
                    <a href="{{ route('admin.user.create') }}" class="btn btn-outline-primary">Создать</a>
                </div>
                <div class="card-body">
                    @foreach ($users as $user)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>{{ $user->name }}</div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.user.show') }}"
                                   class="btn btn-primary me-3">Просмотреть</a>
                                <a href="{{ route('admin.user.edit') }}"
                                   class="btn btn-primary me-3">Редактировать</a>
                                <form action="{{ route('admin.user.destroy') }}" method="POST">
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
