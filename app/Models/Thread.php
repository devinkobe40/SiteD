<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id', 'title' , 'views', 'post',
    ];

    public function user(){
      return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function comment(){
      return $this->hasMany('App\Models\Comment', 'thread_id');
    }

}
