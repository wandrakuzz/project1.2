<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Suggest extends Model
{
    protected $fillable = [
      'activity_name',
      'activity_date_start',
      'activity_date_end',
      'activity_time_start',
      'activity_time_end',
      'activity_summary',
      'is_verified',
      'path',
      'status',

     ];


    protected $dates = [
      'activity_date_start',
      'activity_date_end',
    ];

    /**
     *
     */
    protected $casts = [
      'is_verified' => 'boolean'
    ];


     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     public function verify()
     {
       return $this->hasOne(Verify::class,'verify_id');
     }

     public function jawatan()
     {
       return $this->hasOne(Jawatan::class,'jawatan_id');
     }
}
