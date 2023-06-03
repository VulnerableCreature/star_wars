@extends('admin.layouts.app')
@section('title', 'Роли')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Роли</div>
                    <a href="{{ route('admin.role.create') }}" class="btn btn-outline-primary">Создать</a>
                </div>
                <div class="card-body">
                    @foreach ($roles as $role)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>{{ $role->title }}</div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.role.show', $role->id) }}"
                                   class="btn btn-primary me-3">Просмотреть</a>
                                <a href="{{ route('admin.role.edit', $role->id) }}"
                                   class="btn btn-primary me-3">Редактировать</a>
                                <form action="{{ route('admin.role.destroy', $role->id) }}" method="POST">
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
