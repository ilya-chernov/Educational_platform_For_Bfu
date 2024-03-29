@extends('layouts.base')
@section('title', 'Регистрация в системе')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 m-5">
                <div class="card">
                    <div class="card-header">Регистрация</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Фамилия -->
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Фамилия</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                           class="form-control @error('surname') is-invalid @enderror" name="surname"
                                           value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                <!-- BLOCK END -->
                                <!-- NAME -->
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Имя</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- BLOCK END -->
                                <!-- 2nd NAME -->
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Отчество</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('sname') is-invalid @enderror" name="sname"
                                               value="{{ old('sname') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- BLOCK END -->
                                <!-- KANTIANA MAIL -->
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Адрес почты
                                    (Кантиана)</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                <!-- BLOCK END -->
                                <!-- PERSONAL MAIL -->
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Личная почта</label>

                                    <div class="col-md-6">
                                        <input id="email" type="pemail"
                                               class="form-control @error('email') is-invalid @enderror" name="pemail"
                                               value="{{ old('pemail') }}" required autocomplete="email">

                                        @error('pemail')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- BLOCK END -->



                                <!-- PASSWORD -->
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                <!-- BLOCK END -->
                                <!-- CONFIRM PASSW -->
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Повторите ввод
                                    пароля</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                                <!-- BLOCK END -->
                                <!-- CONFIRM BTN -->
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Регистрация
                                    </button>
                                </div>
                            </div>
                                <!-- BLOCK END -->
                        </form>
                        <!-- BLOCK END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
