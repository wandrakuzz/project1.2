<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $fillable = [
      'activity_name',
      'activity_date_start',
      'activity_date_end',
      'activity_time_start',
      'activity_time_end',
      'activity_summary',

     ];
}
