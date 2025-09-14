<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionListing extends Model {
    protected $fillable=['user_id','pet_name','species','breed','age','health_status','status','image'];
    public function shelter(){ return $this->belongsTo(User::class,'user_id'); }
}
