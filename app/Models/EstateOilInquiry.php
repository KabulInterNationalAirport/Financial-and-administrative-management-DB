<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class EstateOilInquiry extends Model
{
    use HasFactory;

    public function EstateOilCar(): BelongsTo
    {
        return $this->belongsTo(EstateOilCar::class);
    }
}
