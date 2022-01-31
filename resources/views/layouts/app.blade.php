@extends('layouts.base')

@section('add_info_in_head')
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
@endsection
@section('main')
    <div class="container d-flex  flex-column align-items-center">
        <h1 class="my-3 text-left p-5 ">Профиль</h1>
        <div class="col-md-8 ">
            <h4 class="mb-3">Основная информация</h4>
            <hr class="mb-4">
            <form class="needs-validation justify-content-center" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Имя</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName"  value="{{ auth()->user()->surname }}" readonly readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Электронный адрес <span class="text-muted">(Также является логином)</span></label>
                    <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" readonly>
                </div>

                <button type="button" class="btn btn-secondary float-right">Изменить пароль</button>
                <button type="button" class="btn btn-secondary float-right">Изменить данные</button>
                <hr class="mb-4">
            </form>
        </div>

    </div>
@endsection
