@extends('layouts.base')
@section('title', 'База знаний ClassMotion')

@section('main')
    <div class="container my-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Главная страница</a></li>
                <li class="breadcrumb-item active" aria-current="page">База знаний ClassMotion</li>
            </ol>
        </nav>
        <h1 class="my-3 text-left mt-3">Чем мы можем Вам помочь?</h1>
        <div class="alert alert-primary" role="alert">
            Если в перечисленном списке Вы не видите проблему, или даже описанное не может помочь Вам
            решить проблему, в таком случае напишите письмо на <a href="mailto://hotline@edu.ichernov.ru">hotline@edu.ichernov.ru</a>
            для поддержки и решения проблемы.
        </div>
        <p>В базе знаний SchoolMotion перечислены возможные проблемы и пути их решения. Пожалуйста,
            ознакомьтесь с содержимым, прежде чем обращаться в службу технической поддержки. </p>
    @foreach($problems as $problem)
<h2><a href="/kb/{{ $problem->id }}">KB {{ $problem->id }}: {{ $problem->title }}</a></h2>
    @endforeach
    </div>
@endsection
