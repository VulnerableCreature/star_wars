@extends('admin.layouts.app')
@section('title', 'Пользователь')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Пользователи | <strong>{{ $user->name }} </strong></div>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="card-body w-25">
                        <form action="{{ route('admin.userRole.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <span
                                class="{{ $user->role->id == 1 ? 'badge text-bg-danger' : 'badge text-bg-dark' }}">{{ $user->role->title }}</span>
                            <div class="form-group mt-3">
                                <label for="name" class="form-label">Имя пользователя</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                       id="name" readonly>
                            </div>
                            <div class="form-floating mt-3">
                                <select class="form-select" id="floatingSelect" aria-label="" name="role_id">
                                    @foreach($roles as $role)
                                        <option
                                            value="{{ $role->id }}" {{ $role->id == old('role_id') ? 'selected' : '' }}>{{ $role->title }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Выберите роль пользователя</label>
                                @error('role_id')
                                <div id="category_title" class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="Обновить" class="btn btn-primary me-3">
                                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary me-3">Назад</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
