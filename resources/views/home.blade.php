@extends('layouts.base')
@section('title', 'Профиль')
@section('add_info_in_head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
@endsection

@section('main')
    <div class="container">

        <h1 class="my-3 text-left">Профиль</h1>
        <div class="col-md-8">
            <h4 class="mb-3">Основная информация</h4>
            <hr class="mb-4">
            <form class="needs-validation justify-content-center" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Имя</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="{{ auth()->user()->name }}" readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastName">Отчество</label>
                        <input type="text" class="form-control" id="lastName"  value="{{ auth()->user()->sname }}" readonly>
                    </div>
                </div>


                    <div class="col-md-6 mb-3">
                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName"  value="{{ auth()->user()->surname }}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Электронный адрес <span class="text-muted">(является логином)</span></label>
                    <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" readonly>
                </div>

                <button type="button" class="btn btn-secondary float-right">Изменить пароль</button>
                <button type="button" class="btn btn-secondary float-right">Изменить данные</button>
                <hr class="mb-4">
            </form>
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Ссылки на иные ресурсы</h2>
                    <p>Полезные ресурсы, пригодные для обучения, уточнения материала, подготовки к контрольным и
                        самостоятельным работам. </p>
                    <ul class="icon-list">
                        <li><a href="http://mathprofi.ru/" target="_blank"> mathprofi.ru – Высшая математика – просто и
                                доступно!</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Быстрые ссылки</h2>
                    <p>Здесь собраны все ссылки информационного оснащения БФУ им. И. Канта. Пожалуйста, выберите
                        интересующий Вас пункт</p>
                    <ul class="icon-list">
                        <li><a href="https://kantiana.ru">Официальный сайт БФУ</a></li>
                        <li><a href="https://vk.com/ifmnit">Группа ИФМНИиТ БФУ во ВКонтакте</a></li>
                        <li><a href="https://vk.com/id132776844">Страница Матфак БФУ во ВКонтакте</a></li>
                        <li><a href="https://lk.kantiana.ru">Личный кабинет Студента</a></li>
                        <li><a href="https://fc.kantiana.ru">Сайт Физической Культуры Кантиана</a></li>
                        <li><a href="https://lms-3.kantiana.ru">ЛМС Кантиана</a></li>
                    </ul>
                </div>
            </div>
        </div>

        </div>



    </div>
@endsection
