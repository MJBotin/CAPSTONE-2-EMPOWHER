<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'username',
        'gender',
        'birthdate',
        'civil_status',
        'place_of_birth',
        'citizenship',
        'contact_number',
        'email',
        'address',
        'password',
        'user_type',
        'profile_photo',
        'id_front_photo',
        'id_back_photo',
        'registration_status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'birthdate' => 'date',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function announcements()
    {
        return $this->hasMany(\App\Models\Announcement::class, 'created_by');
    }
}
