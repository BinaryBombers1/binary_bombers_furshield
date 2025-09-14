<?php

// app/Models/Pet.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    // app/Models/Pet.php
    protected $fillable = ['user_id', 'name', 'species', 'breed', 'age', 'gender', 'medical_history', 'image'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function healthRecords()
    {
        return $this->hasMany(HealthRecord::class);
    }
}
