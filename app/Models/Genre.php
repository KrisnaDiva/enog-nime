<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Genre extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function getRouteKeyName(){
        return 'slug';
    }
    public function animes(){
        return $this->belongsToMany(Anime::class,'anime_genres');
    }
    
}
