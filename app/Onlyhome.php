<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onlyhome extends Model
{
    protected $fillable = [
         'start_time', 'end_time','task',
    ];
}
