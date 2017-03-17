<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuggestFeedback extends Model
{
    //
    protected $fillable = [
      'suggestion_id',
      'status',
      'notes',
      'user_id',
     ];
}
