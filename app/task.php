<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
      protected $fillable = [
        'name',
        'user_id'
    ];
}
