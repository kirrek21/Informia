@extends('layout')
@section('content')
<form action="/article/{{$article->id}}" method="post"> 
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Дата публикации</label>
    <input name="datePublic" type="date" class="form-control" value="{{$article->datePublic}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Название</label>
    <input name="title" type="text" class="form-control" value="{{$article->title}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Короткое описание</label>
    <input name="shortDesc" type="text" class="form-control" value="{{$article->shortDesc}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Описание</label>
    <textarea name="desc" class="form-control">{{$article->desc}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection