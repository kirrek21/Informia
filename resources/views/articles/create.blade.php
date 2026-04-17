@extends('layout')
@section('content')
<form action="/article" method="post"> 
  @csrf
  <div class="mb-3">
    <label class="form-label">Дата публикации</label>
    <input name="datePublic" type="date" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Название</label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Короткое описание</label>
    <input name="shortDesc" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Описание</label>
    <textarea name="desc" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection