@extends('layouts.base')
@section('title', 'Библиотека | ClassMotion')
@section('main')
<div class="container">
    <h1 class="my-3 text-left"> Бибилиотека</h1>
    <p class="text-right"><a href="{{ route('book.add') }}">Добавить книгу</a></p>
    @if(count($books) > 0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
        <td><t3>{{ $book-> title }}</t3></td>
        <td>
            <a href="library/{{ $book-> id }}/">Подробнее</a>
            <a href="library/{{ $book-> id }}/edit">Изменить</a>
            <a href="library/{{ $book-> id }}/delete">Удалить</a>
        </td>
        </tr>
            @endforeach
        </tbody>
    </table>
        @endif
</div>
@endsection
