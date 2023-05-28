@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center text-center alert alert-light border border-dark mb-3">
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Пользователи</a>
            </div>
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Посты</a>
            </div>
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Категории</a>
            </div>
            <div class="col mx-2">
                <a href="" class="btn btn-outline-dark">Тэги</a>
            </div>
        </div>
        <div class="row mb-5 align-items-center text-center alert alert-light d-flex justify-content-between">
            <div class="card" style="max-width: 18rem;">
                <div class="card-header">Пользователи</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card" style="max-width: 18rem;">
                <div class="card-header">Посты</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card" style="max-width: 18rem;">
                <div class="card-header">Категории</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card" style="max-width: 18rem;">
                <div class="card-header">Тэги</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
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
    </div>
    </div>
@endsection
