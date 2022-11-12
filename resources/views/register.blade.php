<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Yinka Enoch Adedokun">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
    </head>
      <body>
        <div class="container-fluid">
            <div class="row no-gutter">
              <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
              </div>
              <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-9 col-lg-8 mx-auto">
                        <h3 class="login-heading mb-4">Регистрация</h3>
                        <form action="{{route('register.store')}}" method="post">
                          @csrf
                          <div class="form-label-group">
                            <input name="name" type="text" id="inputFio" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputFio">ФИО</label>
                          </div>
                          <div class="form-label-group">
                            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputEmail">Электронная почта</label>
                          </div>
                          <div class="form-label-group">
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Пароль</label>
                          </div>
                          <div class="form-label-group">
                            <input name="password_confirmation" type="password" id="inputRepeatPassword" class="form-control" placeholder="Password" required>
                            <label for="inputRepeatPassword">Подтверждение пароля</label>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Зарегистрироваться</button>
                            <div class="text-center">
                                <div><a class="small" href="#">Забыли пароль?</a></div>
                                <div><a class="small" href="{{route('login')}}">Войти</a></div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </body>
</html>