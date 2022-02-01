@extends('layouts.base')
@section('title', 'Информационная система МОАИС')
@section('main')
    <div class="col-lg-10 mx-auto p-3 py-md-5">
        <main>
            <div class="alert alert-primary" role="alert">
                Кантиана всегда под рукой! Учебные материалы, расписание и все остальное в быстрой доступности.<br> <a
                    href="#" class="alert-link">Статья: как добавить веб-приложение на рабочий стол iOS и Android</a>
            </div>
            <h1>Информационная система для студентов 1 курса Математического обеспечения БФУ им. И. Канта</h1>
            <p class="fs-5 col-lg-9">Здесь собраны все самые нужные и актуальные материалы (ссылки, файлы, расписание и
                т. п.) для учебы. По всем вопросам обращайтесь к старосте или администратору системы.</p>

            <!-- ><div class="mb-5">
             //   <a href="/docs/5.1/examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
           // </div> -->

            <hr class="col-3 col-md-2 mb-5">

            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Ссылки на иные ресурсы</h2>
                    <p>Полезные ресурсы, пригодные для обучения, уточнения материала, подготовки к контрольным и
                        самостоятельным работам. </p>
                    <ul class="icon-list">
                        <li><a href="http://mathprofi.ru/" target="_blank"> mathprofi.ru – Высшая математика – просто и
                                доступно!</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Быстрые ссылки</h2>
                    <p>Здесь собраны все ссылки информационного оснащения БФУ им. И. Канта. Пожалуйста, выберите
                        интересующий Вас пункт</p>
                    <ul class="icon-list">
                        <li><a href="https://kantiana.ru">Официальный сайт БФУ</a></li>
                        <li><a href="https://vk.com/ifmnit">Группа ИФМНИиТ БФУ во ВКонтакте</a></li>
                        <li><a href="https://vk.com/id132776844">Страница Матфак БФУ во ВКонтакте</a></li>
                        <li><a href="https://lk.kantiana.ru">Личный кабинет Студента</a></li>
                        <li><a href="https://fc.kantiana.ru">Сайт Физической Культуры Кантиана</a></li>
                        <li><a href="https://lms-3.kantiana.ru">ЛМС Кантиана</a></li>
                    </ul>
                </div>
            </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top mg-center">
            SchoolMotion Technical Preview build 1500 © 2022
        </footer>
    </div>
@endsection
