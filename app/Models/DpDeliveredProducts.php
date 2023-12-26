<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class DpDeliveredProducts extends Model
{
    use HasFactory;

    public function OrgStuffDp(): BelongsTo  
    {
        return $this->belongsTo(OrgStuffDp::class);
    }

    public function TotalProductDp(): BelongsTo
    {
        return $this->belongsTo(TotalProductDp::class);
    }
}
