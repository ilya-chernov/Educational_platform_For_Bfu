<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'organizationID',
        'instituteID',
        'specializationID',
        'YearNum',
        'groupID',
        'lessonNum',
        'StartTime',
        'FinishTime',
        'lesson',
        'typeOfLesson',
        'teacher'
        ];
}
