@extends('layouts.base')

@section('title', $problem->title)

@section('main')
    <div class="container my-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Главная страницаы</a></li>
                <li class="breadcrumb-item"><a href="/kb">База знаний ClassMotion</a></li>
                <li class="breadcrumb-item active" aria-current="page">KB {{ $problem->id }}</li>
            </ol>
        </nav>
        <h1 class="my-3 text-left mt-3">База знаний ClassMotion</h1>
        <h2>KB {{ $problem->id }}: {{ $problem->title }}</h2>

        <h2>Описание проблемы</h2>
        <p> {{ $problem->description }}</p>

        <h2>Возможное решение</h2>
        <p>{{ $problem->solution }}</p>
    </div>

@endsection
