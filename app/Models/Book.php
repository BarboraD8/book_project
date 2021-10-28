<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Models\Author');
    }

    public function publisher(){
        // Book belongs to Publisher
        return $this->belongsTo('App\Models\Publisher');
    }

    public function bookshops(){
        return $this->belongsToMany('App\Models\Bookshop');
    }

    public function reviews(){
        // Book has many Review(s)
        return $this->hasMany('App\Models\Review');
    }
}
