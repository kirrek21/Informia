@extends('layout')
@section('content')
<div class="card" style="width: 38rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h6 class="card-sutitle mb-2 text-muted">{{$article->shortDesc}}</h6>
    <p class="card-text">{{$article->desc}}</p>
    <div class="btn-group" role="group">
      <a href="/article/{{$article->id}}/edit" class="btn btn-link">Изменить</a>
      <form action="/article/{{$article->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-link">Удалить</button>
      </form>
    </div>
  </div>
</div>
@endsection