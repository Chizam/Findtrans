<?php

namespace Findtrans;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   protected $fillable = [
        'name', 'state',
    ];

}
