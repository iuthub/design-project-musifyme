<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'biography', 'photo', 'quote'];
    public function genres(){
        return $this->belongsToMany('App\Genre');
    }
}
