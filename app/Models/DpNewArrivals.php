<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class DpNewArrivals extends Model
{
    use HasFactory;

    public function TrusteeDp(): BelongsTo
    {
        return $this->belongsTo(TrusteeDp::class);
    }
    public function TotalProductDp(): BelongsTo
    {
        return $this->belongsTo(TotalProductDp::class);
    }

}
