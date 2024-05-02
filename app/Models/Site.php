<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'review',
        'department_id',
        'location_y',
        'location_x'
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    protected function location(): Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->location_y}, {$this->location_x}"
        );
    }

}
