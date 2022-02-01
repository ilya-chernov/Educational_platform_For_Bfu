@extends('layouts.base')
@section('title', 'Редактирование записи')

@section('main')
    <div class="container">
        <form action=" {{ route('book.update', ['bookID' => $book->id]) }} " method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="subjectChoice">Выберите предметную область</label>
                <select name="subject" class="form-control">
                    <option  value="{{ $book->subject_id }}" selected>Выберите дисциплину</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Название книги</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $book->title }}">
            </div>

            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description" rows="5" >{{ $book->description }}</textarea>
            </div>


            <div class="form-group">
                <label for="book_link">Прямая ссылка на скачивание</label> <span class="text-muted"><a href="/kb/2">Подробнее</a></span>
                <input type="text" class="form-control" name="book_link" id="book_link" value="{{ $book->book_link }}">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Сохранить">
        </form>

    </div>

@endsection
