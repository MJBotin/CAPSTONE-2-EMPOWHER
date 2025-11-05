<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class AuditLog extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'staff_id',
        'date',
    ];

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}
