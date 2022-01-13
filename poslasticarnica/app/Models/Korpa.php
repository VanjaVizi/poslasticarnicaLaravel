<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korpa extends Model
{
    use HasFactory;


    public function stavke()
    {
         return $this->hasMany(StavkaKorpe::class);
    }

    public function user()
    {
         return $this->belongsTo(User::class);
    }



}
