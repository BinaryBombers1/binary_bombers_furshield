<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model {
    protected $fillable=['appointment_id','symptoms','diagnosis','medication','follow_up'];
    public function appointment(){ return $this->belongsTo(Appointment::class); }
}