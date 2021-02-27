<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetAnswere extends Model
{
    protected $fillable = [
        'question_id', 'answere_id','user_id'
    ];
}
