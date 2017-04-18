<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    //
    protected $fillable = [
      'suggest_id','activity_name','activity_date','activity_type','activity_report'
     ];


     public function suggest()
     {
       return $this->belongsTo(Suggest::class, 'suggest_id');
     }
}
