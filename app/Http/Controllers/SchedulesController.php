<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchedulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        $weekMap = [
            0 => 'Воскресенье',
            1 => 'Понедельник',
            2 => 'Вторник',
            3 => 'Среда',
            4 => 'Четверг',
            5 => 'Пятница',
            6 => 'Суббота',
        ];
        $dayOfTheWeek = now()->dayOfWeek;
        $weekday = $weekMap[$dayOfTheWeek];
        $subgroup = 1;
        $schedule = ['schedule' => DB::table('schedule')->where('dayOfWeek', $dayOfTheWeek)->get()];
        return view('schedule/schedule', [
            'weekday' => $weekday,
            'schedules' => $schedule,
            'subgroup' => $subgroup
        ]);
    }
}
