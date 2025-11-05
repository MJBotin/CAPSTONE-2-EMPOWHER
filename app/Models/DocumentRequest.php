<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class DocumentRequest extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'resident_id',
        'document_type',
        'purpose',
        'date_requested',
        'status',
        'processed_by',
    ];

    // Relationships
    public function resident()
    {
        return $this->belongsTo(User::class, 'resident_id');
    }

    public function processedBy()
    {
        return $this->belongsTo(User::class, 'processed_by');
    }
}

