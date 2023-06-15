@extends('admin.layouts.app')
@section('title', 'Категории')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Административная панель | Категории</div>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-outline-primary">Создать</a>
                </div>
                <div class="card-body">
                    @if(collect($categories)->isEmpty())
                        @include('admin.includes.data')
                    @else
                    @foreach ($categories as $category)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>{{ $category->title }}</div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.category.show', $category->id) }}"
                                    class="btn btn-primary mx-2">Просмотреть</a>
                                <a href="{{ route('admin.category.edit', $category->id) }}"
                                    class="btn btn-primary mx-3">Редактировать</a>
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
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
