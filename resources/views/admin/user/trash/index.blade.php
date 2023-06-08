@extends('admin.layouts.app')
@section('title', 'Удаленные пользователи')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Административная панель | Пользователи | Удаленные
                </div>
                <div class="card-body">
                    @foreach ($users as $user)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="row g-0 text-center">
                                <div class="col-sm-6 col-md-auto mx-lg-4">{{ $user->name }}</div>
                                <div class="col-6 col-md-auto"><span class="{{ $user->role->id == 1 ? 'badge text-bg-danger' : 'badge text-bg-dark' }}">{{ $user->role->title }}</span></div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <form action="{{ route('admin.user.trash.restore', $user->id) }}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn btn-primary mx-1" value="Восстановить">
                                </form>
                                <form action="{{ route('admin.user.trash.force', $user->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Удалить навсегда">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
