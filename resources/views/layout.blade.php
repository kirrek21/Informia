<!doctype html>
<html lang="en">
  <head>
    <title>Informia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    </style>
        <style>
          body {
            font-family: 'Nunito', sans-serif;
          }
    </style>
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/article">Статьи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/article/create">Создать статью</a>
        </li>
      </ul>
    </div>
    <div class="navbar-nav d-flex justify-content-end">
      @guest
      <li class="nav-item">
        <a class="nav-link" href="/auth/create">Регистрация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/login">Войти</a>
      </li>
      @endguest
      @auth
      <li class="nav-item">
        <a class="nav-link" href="/auth/logout">Выйти</a>
      </li>
      @endauth
    </div>
  </div>
  
</nav>
</header>
<main>
  <div class="container">
      @yield('content')
  </div>
</main>
<footer>
  Супрун Кирилл Дмитриевич группа 243-323
</footer>
</html>