<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tourist_package_id',
        'reservation_at',
        'travel_at',
        'return_at'
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function touristPackage(): BelongsTo
    {
        return $this->belongsTo(TouristPackage::class);
    }
    public static function boot()
    {
        parent::boot();
    
        static::updating(function($reservation){
            $reservation->reservation_at = now();
        });
    }
}
