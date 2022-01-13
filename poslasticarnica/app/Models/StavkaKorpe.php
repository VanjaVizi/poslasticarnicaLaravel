<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StavkaKorpe extends Model
{
    use HasFactory;
    protected $fillable = ['korpa_id','kolicina','proizvod_id','user_id'];
    
    public function korpa( )
    {
        return $this->belongsTo(Korpa::class);
    }

    public function proizvod( )
    {
        return $this->hasOne(Proizvod::class);
    }



}
