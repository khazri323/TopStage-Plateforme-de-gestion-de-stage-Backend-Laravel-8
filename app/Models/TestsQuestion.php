<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TestsQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',
        'question_id'     
    ];
}