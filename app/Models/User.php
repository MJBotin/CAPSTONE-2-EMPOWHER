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
        'last_name',
        'first_name',
        'middle_name',
        'suffix',
        'birthdate',
        'place_of_birth',
        'gender',
        'civil_status',
        'citizenship',
        'email',
        'contact_number',
        'address',
        'username',
        'password',
        'user_type',
        'registration_status', // <--- Add this line here!
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