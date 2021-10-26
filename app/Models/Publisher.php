<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function books(){
        // Publisher has many Book(s)
        return $this->hasMany('App\Models\Book');
    }
}
