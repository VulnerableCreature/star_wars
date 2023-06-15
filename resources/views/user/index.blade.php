@extends('layouts.app')
@section('title', 'Профиль')

@section('content')
    @include('user.includes.menu', ['some' => 'countPost'])
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('user.includes.card-header')
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Фамилия</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->lastname ?? 'Необходимо заполнить данные' }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->firstname ?? 'Необходимо заполнить данные' }}">
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Мои посты</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="0">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Понравившиеся посты</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $countPost }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
