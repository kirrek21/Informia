@extends('layout')

@section('content')
<h2 class="mb-4">Комментарии на модерации</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($comments->isEmpty())
    <div class="alert alert-info">
        Нет комментариев, ожидающих модерации.
    </div>
@else
    @foreach($comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    Статья: 
                    <a href="{{ route('article.show', $comment->article->id) }}">
                        {{ $comment->article->title }}
                    </a>
                </h5>

                <h6 class="card-subtitle mb-2 text-muted">
                    Автор: {{ $comment->user->name }}
                </h6>

                <p class="card-text">{{ $comment->text }}</p>

                <div class="d-flex">
                    <form action="{{ route('comments.approve', $comment->id) }}" method="post" class="mr-2">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success">Принять</button>
                    </form>

                    <form action="{{ route('comments.reject', $comment->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Отклонить</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif
@endsection