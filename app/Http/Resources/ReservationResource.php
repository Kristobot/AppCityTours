<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'tourist_package_id' => $this->tourist_package_id,
            'reservation_at' => $this->reservation_at,
            'travel_at' => $this->travel_at,
            'return_at' => $this->return_at
        ];
    }
}
