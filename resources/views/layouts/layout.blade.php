<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Yinka Enoch Adedokun">
        <title>User Main</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/user.css')}}"/>
    </head>
    <body>
        <header class="p-3 bg-dark text-white border-bottom">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  @auth
                    <li><a class="nav-link px-1 text-secondary">Ваше имя - {{auth()->user()->name}}</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Профиль</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Подать заявку</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Список поданных заявок</a></li>
                  @endauth
                  @guest
                      
                  @endguest
                  
                </ul>
                <div class="text-end">
                  @auth
                    <a href="{{route('logout')}}"><button type="button" class="btn btn-warning">Выйти</button></a>
                  @endauth
                  @guest
                      
                  @endguest
                </div>
              </div>
            </div>
        </header>
        @yield('content')
        <footer class="py-5 bg-dark border-top"> 
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2021 Company, Inc</span>
        </div>
        </footer>
    </body>  
</html>