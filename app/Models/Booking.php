<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'departure_city',
        'destination_city',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function rate()
    {
        return $this->hasOne(Rating::class);
    }
}
