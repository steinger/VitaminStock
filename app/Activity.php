<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $dates = [
    'created_at',
    'updated_at'
  ];
}
