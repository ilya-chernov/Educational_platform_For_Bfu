<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->text('book_link');
            $table->text('img_link')->nullable();
            $table->string('category_id')->nullable();

            // ПО ГЛАВЕ 2: Межтабличные связи. Работа со связанными записями.
            // Сделали откат миграции на шаг, теперь создаем ПОЛЕ ВНЕШНЕГО КЛЮЧА!

            // [1]
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // В Ы Д Е Р Ж К А   И З   К Н И Г И
            // [1] Метод foreignId() объекта структуры таблицы создает поле внешнего ключа и возвращает
            // представляющий его объект. И для создания связи вызываем метод constrained(),
            // который извлечет из имени все необходимые ему сведения: имя связываемой первичной
            // таблицы (users) и ее ключевое поле (id). Метод onDelete() укажет операцию,
            // выполняемую над связанными записями вторичной таблицы при удалении записи первичной таблицы,
            // (у нас cascade, т. е. каскадное удаление).


            // Запускаем миграцию. Начинаем заниматься моделями пользователей.
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
