<?php

namespace Findtrans;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
protected $fillable = [
        'tickets', 'from', 'to', 'departure_time', 'departure_date',
    ];
}
