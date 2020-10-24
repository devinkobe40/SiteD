<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id', 'thread_id', 'reply',
    ];

    public function user(){
      return $this->belongsTo('App\Models\User');
    }

    public function thread(){
      return $this->belongsTo('App\Models\Thread');
    }

}
