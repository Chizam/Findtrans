<?php

namespace Findtrans;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use Notifiable;

     protected $fillable = [
        'name', 'email', 'phone','tickets',
    ];

   /* $book = new Booking();
$book->email = request()->email;   // This is the email you want to send to.
$book->notify(new TestEmail());*/

}
