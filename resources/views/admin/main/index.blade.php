@extends('admin.layouts.app')
@section('title', 'Главная')

@section('content')
    @include('admin.includes.card')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin panel</div>
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>It's the post</div>
                    <div class="justify-content-end">
                        <a href="" class="btn btn-primary">Просмотреть</a>
                        <a href="" class="btn btn-primary">Редактировать</a>
                        <a href="" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
