<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function Book(){
        return $this->hasOne('App\Author'); 
    }

    public function Publisher(){
        return $this->hasOne('App\Publisher'); 
    }

    public function LibraryCard(){
        return $this->belongsTo('App\LibraryCard'); 
    }
}
