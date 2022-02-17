@extends('layouts.base')
@section('add_info_in_head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        @endsection
@section('title', 'Расписание МОАИС')

@section('main')
    <div class="container mt-3">
        <h1>Расписание занятий</h1>
        <p class="col-lg-10">Мы за Вашу продуктивность, поэтому в календаре отражено все, что касается Вас. Основные и
            дополнительные
            активности, требующие Вашего внимания (например, "Встреча в актовом зале", или "митап Андрея"). Расписание
        автоматически подкорректировано в соотвествии с вашей подгруппой. </p>

    </div>
@endsection
