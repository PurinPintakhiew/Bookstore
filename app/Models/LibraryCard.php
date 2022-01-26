<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryCard extends Model
{
    use HasFactory;
    protected $table = 'library_cards';

    public function LibraryCard(){
        return $this->belongsTo('App\Publisher'); 
    }

}
