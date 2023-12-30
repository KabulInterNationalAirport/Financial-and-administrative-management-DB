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
    public function CamDeliveredProducts()
    {
        return $this->hasMany(CamDeliveredProducts::class);
    }
    public function DpItProducts()
    {
        return $this->hasMany(DpItProducts::class);
    }
    public function DpCars()
    {
        return $this->hasMany(DpCars::class);
    }
    public function CamItProDelivered()
    {
        return $this->hasMany(CamItProDelivered::class);
    }
    public function CamCarsDelivered()
    {
        return $this->hasMany(CamCarsDelivered::class);
    }
   
}
