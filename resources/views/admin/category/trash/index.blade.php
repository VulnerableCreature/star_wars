@extends('admin.layouts.app')
@section('title', 'Удаленные категории')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Административная панель | Категории | Удаленные
                </div>
                <div class="card-body">
                    @if(collect($categories)->isEmpty())
                        @include('admin.includes.data')
                    @else
                        @foreach ($categories as $category)
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>{{ $category->title }}</div>
                                <div class="d-flex justify-content-end">
                                    <form action="{{ route('admin.category.trash.restore', $category->id) }}"
                                          method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-primary mx-1" value="Восстановить">
                                    </form>
                                    <form action="{{ route('admin.category.trash.force', $category->id) }}"
                                          method="POST">
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
