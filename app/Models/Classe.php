<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function attributions(){
        return $this->HasMany(Attributtion::class);
    }


    public function payments(){
        return $this->HasMany(Classe::class);
    }
}
