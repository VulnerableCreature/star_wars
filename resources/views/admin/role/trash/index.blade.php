@extends('admin.layouts.app')
@section('title', 'Удаленные роли')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Административная панель | Роли | Удаленные
                </div>
                <div class="card-body">
                    @if(collect($roles)->isEmpty())
                        @include('admin.includes.data')
                    @else
                        @foreach ($roles as $role)
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>{{ $role->title }}</div>
                                <div class="d-flex justify-content-end">
                                    <form action="{{ route('admin.role.trash.restore', $role->id) }}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-primary mx-1" value="Восстановить">
                                    </form>
                                    <form action="{{ route('admin.role.trash.force', $role->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Удалить навсегда">
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
