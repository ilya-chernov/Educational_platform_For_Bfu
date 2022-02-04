@extends('layouts.base')

@section('title', "Удаление")
@section('main')
    <form action="{{ route('book.destroy') }}/{{ $book->id }}/delete" method="POST">
        @csrf
        @method('DELETE')
        <p>Вы действительно хотите удалить эту книгу?</p>
        <a href="/library">Вернуться</a>
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>

@endsection
