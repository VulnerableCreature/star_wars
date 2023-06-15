@extends('admin.layouts.app')
@section('title', 'Посты | Создание')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Пользователь | Создание</div>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <form action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Имя пользователя</label>
                            <input type="text" name="name" value="" class="form-control"
                                   id="name">
                            @error('name')
                            <div id="name" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">E-mail пользователя</label>
                            <input type="email" name="email" value="" class="form-control"
                                   id="email">
                            @error('email')
                            <div id="email" class="text-danger">{{ $message }}</div>
                            @enderror
                            <div id="email" class="form-text">E-mail пользователя не должен повторяться. Поле
                                уникальное
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="login" class="form-label">Логин</label>
                            <input type="text" name="login" value="" class="form-control"
                                   id="login">
                            @error('login')
                            <div id="login" class="text-danger">{{ $message }}</div>
                            @enderror
                            <div id="login" class="form-text">Логин пользователя не должен повторяться. Поле
                                уникальное
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Пароль</label>
                            <input type="password" name="password" value="" class="form-control"
                                   id="password">
                            @error('password')
                            <div id="password" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mt-3">
                            <select class="form-select" id="floatingSelect" aria-label="" name="role_id">
                                @foreach($roles as $role)
                                    <option
                                        value="{{ $role->id }}" {{ $role->id == old('role_id') ? 'selected' : '' }}>{{ $role->title }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Выберите роль пользователя</label>
                            @error('category_id')
                            <div id="category_title" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-5">
                            <input type="submit" value="Создать" class="btn btn-primary me-3">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary me-3">Отмена</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
