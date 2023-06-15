@extends('admin.layouts.app')
@section('title', 'Роль')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Роли | {{ $role->title }}<strong></strong></div>
                    <a href="{{ route('admin.role.index') }}" class="btn btn-outline-primary">Вернуться назад</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="form-group">
                            <label for="role_title" class="form-label">Название роли</label>
                            <input type="text" name="title" class="form-control" id="role_title"
                                   value="{{ $role->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tag_created" class="form-label">Дата создания</label>
                            <input type="text" name="title" class="form-control" id="tag_created"
                                   value="{{ $role->created_at }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tag_updated" class="form-label">Дата изменения</label>
                            <input type="text" name="title" class="form-control" id="tag_updated"
                                   value="{{ $role->updated_at }}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-primary mt-3">Редактировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
