<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // app/Models/User.php
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function healthRecords()
    {
        return $this->hasMany(HealthRecord::class);
    }

    // app/Models/User.php
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }
    public function vetAppointments()
    {
        return $this->hasMany(Appointment::class, 'vet_id');
    }

    // app/Models/User.php
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
}
