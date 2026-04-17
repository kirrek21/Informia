@extends('layout')
@section('content')
<form action="/auth/signIn" method="post"> 
  @csrf
  <div class="mb-3">
    <label>Адрес электронной почты</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection