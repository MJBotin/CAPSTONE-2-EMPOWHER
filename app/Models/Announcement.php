<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Announcement extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'title',
        'content',
        'image_path',
        'start_date',
        'end_date',
        'status',
        'created_by',
    ];

    protected $casts = [
        'date_started' => 'datetime',
        'date_end' => 'datetime',
    ];

    
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
