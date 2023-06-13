@extends('layouts.app')
@section('title', 'Понравившиеся посты')

@section('content')
    @include('user.includes.menu', ['some' => 'countPost'])
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    @foreach($posts as $post)
                        <div class="d-block mb-3">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/'. $post->preview_image) }}" class="img-thumbnail" alt="..."
                                     style="width: 100px; height: 100px; object-fit: contain;">
                                <div class="mx-3">
                                    <div>{{ $post->title }}</div>
                                    <div>
                                        <p @class([
                                'badge text-bg-danger' => $post->category->id === 1,
                                'badge text-bg-primary' =>$post->category->id === 2,
                                'badge text-bg-info' => $post->category->id === 9
                                ])>{{ $post->category->title }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div><a href="{{ route('personal.liked.show', $post->id) }}" class="btn btn-primary mt-3">Перейти</a></div>
                        </div>
                    @endforeach
                        <div><a href="{{ route('personal.index') }}" class="btn btn-outline-dark mt-3">Back</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
