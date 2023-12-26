<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class TotalProductDp extends Model
{
    use HasFactory;

    public function DpNewArrivals()
    {
        return $this->hasMany(DpNewArrivals::class);
    }
    public function DpDeliveredProducts()
    {
        return $this->hasMany(DpDeliveredProducts::class);
    }
   
}
