@extends('layouts.base')
@section('title', 'Добавление книги')

@section('main')
    <div class="container">
        <h1 class="my-3 text-left"> Добавление книги</h1>
        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="subjectChoice">Выберите предметную область</label>
                <select name="subject" class="form-control">
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Название книги</label>
                <input type="text" name="title" class="form-control" id="title"  placeholder="Б. П. Демидович. Сборник">
            </div>

            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>


            <div class="form-group">
                <label for="book_link">Прямая ссылка на скачивание</label> <span class="text-muted"><a href="/kb/2">Подробнее</a></span>
                <input type="text" class="form-control" name="book_link" id="book_link" placeholder="https://cloud.yandex.ru/aksdlak/file.pdf">
            </div>
            <div class="form-group">
                <label for="image">Загрузите обложку</label> <br>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>

@endsection
