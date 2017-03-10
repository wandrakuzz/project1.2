<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $fillable = [
      'activity_name','activity_date','activity_summary'
     ];
}
