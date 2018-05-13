<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['name', 'song', 'photo', 'rate', 'duration', 'genre_id', 'album_id', 'artist_id'];
    
    public function genre(){
        return $this->belongsTo('App\Genre');
    }
    
    public function album(){
        return $this->belongsTo('App\Album');
    }
    
    public function artist(){
        return $this->belongsTo('App\Artist');
    }
}
