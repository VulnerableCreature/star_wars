@extends('layouts.app')
@section('title', 'Профиль | Редактирование')

@section('content')
    @include('user.includes.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('user.includes.card-header')
                <div class="card-body">
                    <form action="{{ route('personal.update', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext w-25" id="staticEmail"
                                       value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Фамилия</label>
                            <div class="col-sm-10">
                                <input type="text" name="lastname" class="form-control w-25" id="staticEmail"
                                       value="{{ Auth::user()->lastname ?? 'Необходимо заполнить данные' }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Имя</label>
                            <div class="col-sm-10">
                                <input type="text" name="firstname" class="form-control w-25" id="staticEmail"
                                       value="{{ Auth::user()->firstname ?? 'Необходимо заполнить данные' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Обновить" class="btn btn-primary me-3">
                            <a href="{{ route('personal.index') }}" class="btn btn-secondary me-3">Отмена</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
