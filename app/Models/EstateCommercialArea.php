<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class EstateCommercialArea extends Model
{
    use HasFactory;

    public function ECAriaRent(): BelongsTo
    {
        return $this->belongsTo(ECAriaRent::class);
    }
}
