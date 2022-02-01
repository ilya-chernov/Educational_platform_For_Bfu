<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['subject_id', 'title', 'description', 'book_link', 'img_link', 'category_id'];
    public $timestamps = false;

    public function user() {
        return $this->belongTo(User::class);
    }
}
