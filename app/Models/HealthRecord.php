<?php

// app/Models/HealthRecord.php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model {
    use HasFactory;
    protected $fillable = ['pet_id','user_id','visit_date','type','notes','document'];
    public function pet() { return $this->belongsTo(Pet::class); }
}
