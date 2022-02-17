@extends('layouts.base')
@section('title', 'Форма связи')
@section('main')
    <div class="container mt-3 col-lg-5">
        <h1>Форма обратной связи</h1>
        <p>Любые мысли, пожелания по поводу расширения функционала, информацию об ошибках, с которыми Вы столкнулись,
            или же просто передать «привет» разработчику можно сюда (но «приветы» лучше, конечно, передавать напрямую в
            личные сообщения в ВК). </p>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('feedback.add') }}" method="POST">
            @csrf
            @if (!Auth::guest())
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" class="form-control" id="name"  placeholder="Введите имя" value="{{ auth()->user()->name }}" readonly>
            </div>

            <div class="form-group">
                <label for="sname">Фамилия</label>
                <input type="text" name="surname" class="form-control" id="surname"  placeholder="Введите фамилию" value="{{ auth()->user()->surname }}" readonly>
            </div>
@else
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" class="form-control" id="name"  placeholder="Введите имя">
                </div>

                <div class="form-group">
                    <label for="sname">Фамилия</label>
                    <input type="text" name="surname" class="form-control" id="surname"  placeholder="Введите фамилию">
                </div>
            @endif

            <div class="form-group">
                <label for="msg">Сообщение</label>
                <textarea class="form-control" name="feedback_text" id="feedback_text" rows="5"></textarea>
            </div>

            <br>
            <input type="submit" class="btn btn-primary" value="Добавить">

        </form>
    </div>
@endsection
