<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diplom</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
    </head>
      <body class="main_bg">
          <div class="position-absolute top-50 start-50 translate-middle">
            <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold px-5 mx-2" href="{{route('login')}}">Вход</a>
            <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold px-3 mx-2" href="{{route('register')}}">Регистрация</a>
          </div>
      </body>
</html>
