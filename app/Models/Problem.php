<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Problem extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'solution'];
    public $timestamps = false;
}
