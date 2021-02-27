<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripactivityModel extends Model
{
    protected $fillable = [
     'endtime' ,'task', 'multitaask', 'ticketprice','adresses' ,'destination','transport',

        'copartner','q1value' ,'q2value','q3value','q4value' ,'q5value','q6value','q7value','q8value',


    ];
}
