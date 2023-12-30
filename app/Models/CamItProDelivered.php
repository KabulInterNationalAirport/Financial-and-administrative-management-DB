<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class CamItProDelivered extends Model
{
    use HasFactory;

    
    public function CamOrgStuff(): BelongsTo  
    {
        return $this->belongsTo(CamOrgStuff::class);
    }

    public function TotalProductDp(): BelongsTo
    {
        return $this->belongsTo(TotalProductDp::class);
    }
}
