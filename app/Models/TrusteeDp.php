<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class TrusteeDp extends Model
{
    use HasFactory;
    public function DpNewArrivals()
    {
        return $this->hasMany(DpNewArrivals::class);
    }
    public function DpDamagedProducts()
    {
        return $this->hasMany(DpDamagedProducts::class);
    }
    public function DpItProducts()
    {
        return $this->hasMany(DpItProducts::class);
    }
    public function DpCars()
    {
        return $this->hasMany(DpCars::class);
    }
    
}
