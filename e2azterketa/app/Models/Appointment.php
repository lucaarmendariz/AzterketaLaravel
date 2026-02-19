<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'paziente_izena',
        'data',
        'egoera',
        'doctor_id'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
