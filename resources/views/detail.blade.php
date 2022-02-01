@extends('layouts.base')
@section('title', $book-> title)
@section('main')
<div class="container">
    <h1 class="my-3 text-left"> Бибилиотека</h1>
    <h2>{{ $book-> title }}</h2>
    <img src="/{{ $book-> img_link }}" class="img-fluid img-thumbnail" alt="{{ $book-> title }}" WIDTH="350" HEIGHT="350">
    <p>{{ $book-> description }}</p>
    <div class="mb-5">
          <a href="/books/{{ $book-> book_link }}" class="btn btn-primary btn-lg px-4">Скачать</a>
@endsection
