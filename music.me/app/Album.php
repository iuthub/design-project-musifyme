<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'photo', 'artist_id'];
    
    public function artist(){
        return $this->belongsTo('App\Artist');
    }
    
    public function songs(){
        return $this->hasMany('App\Song');
    }
}
