<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'star_rating', 'booking_id'];

// Rating model
public function booking()
{
    return $this->belongsTo(Booking::class);
}

}
