<?php

namespace App\Services;

use App\Models\Reservation;
use App\Models\TouristPackage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

Class ReservationService
{
    public function create(array $attributtes)
    {
        $touristPackage = TouristPackage::find($attributtes['tourist_package_id']);

        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'tourist_package_id' => $attributtes['tourist_package_id'],
            'reservation_at' => now(),
            'travel_at' => $attributtes['travel_at'],
            'return_at' => $this->returnAt($attributtes['return_at'],$touristPackage->duration)
        ]);

        return $reservation->fresh();
    }

    public function update(array $attributtes, Reservation $reservation)
    {
        $touristId =  $attributtes['tourist_package_id'];
        if ($attributtes['tourist_package_id']) {
            $touristPackage = TouristPackage::find($touristId);
            $reservation->update([
                'tourist_package_id' => $touristId,
                'return_at' => $this->returnAt($reservation->travel_at,$touristPackage->duration)
            ]);
        }
        else if ($attributtes['travel_at'])
        {
            $reservation->update([
                'travel_at' => $attributtes['travel_at'],
                'return_at' => $this->returnAt($attributtes['travel_at'], $reservation->touristPackage->duration)
            ]);
        }
    }

    private function returnAt(string $travel_at, int $duration): string
    {
        return Carbon::parse($travel_at)->addDays($duration);
    }
}