<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_Single extends Model
{
    protected $fillable = [
        'start_time', 'end_time','task',
    ];

}
