@extends('layout')

@section('content')
<div class="card mb-4" style="width: 38rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $article->title }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $article->shortDesc }}</h6>
    <p class="card-text">{{ $article->desc }}</p>

    <div class="btn-group" role="group">
      <a href="/article/{{ $article->id }}/edit" class="btn btn-link">Изменить</a>
      <form action="/article/{{ $article->id }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-link">Удалить</button>
      </form>
    </div>
  </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@auth
<div class="card mb-4" style="width: 38rem;">
    <div class="card-body">
        <h5 class="card-title">Добавить комментарий</h5>

        <form action="{{ route('comments.store', $article->id) }}" method="post">
            @csrf

            <div class="form-group">
                <label for="text">Комментарий</label>
                <textarea name="text" id="text" class="form-control" rows="4"></textarea>
                @error('text')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-2">Отправить</button>
        </form>
    </div>
</div>
@endauth

<h3>Комментарии</h3>

@if($comments->isEmpty())
    <p>Комментариев пока нет.</p>
@else
    @foreach($comments as $comment)
        <div class="card mb-3" style="width: 38rem;">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $comment->user->name }}
                </h6>
                <p class="card-text">{{ $comment->text }}</p>
                <small class="text-muted">{{ $comment->created_at }}</small>
            </div>
        </div>
    @endforeach
@endif
@endsection