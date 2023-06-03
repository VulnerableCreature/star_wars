@extends('admin.layouts.app')
@section('title', 'Роли | Создание')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Роль | Создание</div>
                    <a href="{{ route('admin.role.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <form action="{{ route('admin.role.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="role_title" class="form-label">Название роли</label>
                            <input type="text" name="title" class="form-control" id="role_title">
                            @error('title')
                            <div id="tag_title" class="text-danger">{{ $message }}</div>
                            @enderror
                            <div id="tag_title" class="form-text">Название роли не должно повторяться. Поле
                                уникальное
                            </div>
                            <input type="submit" value="Создать" class="btn btn-primary mt-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
