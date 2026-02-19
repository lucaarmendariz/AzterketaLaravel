<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'izena',
        'espezialitatea'
    ];
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
