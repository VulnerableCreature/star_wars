@extends('layouts.app')
@section('title', 'Blog')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 row">
            @foreach($posts as $post)
                <div class="card mb-3 p-3">
                    <div class="card-body">
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
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('main.show', $post->id) }}" class="btn btn-primary mt-3">Перейти</a>
                            <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                @csrf
                                @auth()
                                    @if(auth()->user()->likedPost->contains($post->id))
                                        <input type="submit" value="Дизлайк" class="btn btn-outline-danger mt-3">
                                    @else
                                        <input type="submit" value="Лайк" class="btn btn-outline-success mt-3">
                                    @endif
                                @endauth
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

