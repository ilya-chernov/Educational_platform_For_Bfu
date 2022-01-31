<!doctype html>
<html lang="ru">
<head>
    @yield('add_info_in_head')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>

</head>
<body>
<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('landing') }}">Инфосистема МОАИС</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (!Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Главная страница</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('library') }}">Библиотека</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/schedule">Расписание</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/recordings">Запись занятий</a>
                    </li>

        @endif
            </ul>
            <!-- LOG IN -->
            @if (!Auth::guest())
                <form action=" {{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Выход из системы">
                </form>
            @else
                <div class="col-md-4 text-end">
                    <button type="button" class="btn btn-outline-primary me-2" onclick="goToAuth()">Войти в систему</button>
                    <button type="button" class="btn btn-primary" onclick="goToReg()">Регистрация</button>
                </div>
            @endif


        </div>
    </div>
</nav>

<!-- HEADERS END -->
<!-- BODY AREA -->

@yield('main')

<!-- BODY AREA END -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function goToAuth()
    {
        location.href = "/login";
    }

    function goToReg()
    {
        location.href = "/register";
    }
</script>
</body>
</html>
