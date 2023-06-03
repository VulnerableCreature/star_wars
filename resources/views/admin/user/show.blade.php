@extends('admin.layouts.app')
@section('title', 'Пользователь')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Пользователи | <strong>{{ $user->name }} <span class="{{ $user->role->title == 'Администратор' ? 'badge text-bg-danger' : 'badge text-bg-info' }}">{{ $user->role->title }}</span></strong></div>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="card-body w-50">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Имя пользователя</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                   id="name" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">E-mail пользователя</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                   id="email" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Дата регистрации</label>
                            <input type="datetime-local" name="" value="{{ $user->created_at }}" class="form-control"
                                   id="email" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Последнее обновление</label>
                            <input type="datetime-local" name="" value="{{ $user->updated_at }}" class="form-control"
                                   id="email" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary me-3">Редактировать</a>
                            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary me-3">Отмена</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
