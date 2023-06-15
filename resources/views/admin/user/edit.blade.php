@extends('admin.layouts.app')
@section('title', 'Пользователь')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Посты | {{ $user->name }} | <strong>Обновление</strong></div>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Имя пользователя</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                       id="name">
                                @error('name')
                                <div id="name" class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">E-mail пользователя</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                       id="email">
                                @error('email')
                                <div id="email" class="text-danger">{{ $message }}</div>
                                @enderror
                                <div id="email" class="form-text">E-mail пользователя не должен повторяться. Поле
                                    уникальное
                                </div>
                                <input type="hidden" value="{{ $user->id }}" name="user_id">
                            </div>
                            <div class="form-group mb-3">
                                <label for="login" class="form-label">Логин пользователя</label>
                                <input type="text" name="login" value="{{ $user->login }}" class="form-control"
                                       id="login">
                                @error('login')
                                <div id="login" class="text-danger">{{ $message }}</div>
                                @enderror
                                <div id="email" class="form-text">E-mail пользователя не должен повторяться. Поле
                                    уникальное
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span style="font-size: 14px;"
                                    @class([
                                'badge text-bg-danger' => $user->role->id === 1,
                                'badge text-bg-primary' =>$user->role->id === 4,
                                'badge text-bg-info' => $user->role->id === 3
                                ])>{{ $user->role->title }}</span>
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" value="Обновить" class="btn btn-primary me-3">
                                <a href="{{ route('admin.user.role.edit', $user->id) }}"
                                   class="btn btn-primary me-3">Роль</a>
                                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary me-3">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
