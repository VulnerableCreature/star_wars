@extends('layouts.app')
@section('title', 'Понравившиеся посты')

@section('content')
    @include('user.includes.menu', ['some' => 'countPost'])
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    @forelse($posts as $post)
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
                            <div class="d-flex flex-row">
                                <div><a href="{{ route('personal.liked.show', $post->id) }}" class="btn btn-primary mt-3 me-2">Перейти</a></div>
                                <div>
                                    <form action="{{ route('personal.liked.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Удалить" class="btn btn-danger mt-3">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>Вам ничего не понравилось</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Так сообщают <cite title="Неизвестные источники">Неизвестные источники</cite>
                            </figcaption>
                        </figure>
                    @endforelse
                        <div><a href="{{ route('personal.index') }}" class="btn btn-outline-dark mt-3">Back</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
