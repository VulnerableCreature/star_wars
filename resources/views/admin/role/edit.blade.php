@extends('admin.layouts.app')
@section('title', 'Роль')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Роль | {{ $role->title }} | <strong>Обновление</strong></div>
                    <a href="{{ route('admin.role.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('admin.role.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="role_title" class="form-label">Название роли</label>
                                <input type="text" name="title" class="form-control" id="role_title"
                                       value="{{ $role->title }}">
                                @error('title')
                                <div id="tag_title" class="text-danger">{{ $message }}</div>
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
