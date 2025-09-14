<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['pet_id', 'user_id', 'vet_id', 'appointment_time', 'status'];
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function vet()
    {
        return $this->belongsTo(User::class, 'vet_id');
    }
    // app/Models/Appointment.php
    public function treatment()
    {
        return $this->hasOne(Treatment::class);
    }
}
