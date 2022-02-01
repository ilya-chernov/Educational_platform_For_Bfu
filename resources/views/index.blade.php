@extends('layouts.base')
@section('tltle', 'Библиотека')
@section('main')
<div class="container">
    <h1 class="my-3 text-left"> Бибилиотека</h1>
    @if(count($books) > 0)
        <p class="text-right"><a href="{{ route('book.add') }}">Добавить книгу</a></p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Ссылка на загрузку</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
        <td><t3>{{ $book-> title }}</t3></td>
        <td>
            <a href="library/{{ $book-> id }}/">Подробнее</a>
        </td>
        </tr>
            @endforeach
        </tbody>
    </table>
        @endif
</div>
@endsection
