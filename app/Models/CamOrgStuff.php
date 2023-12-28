<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CamOrgStuff extends Model
{
    use HasFactory;

    public function DpDamagedProducts()
    {
        return $this->hasMany(DpDamagedProducts::class);
    }
    public function CamDeliveredProducts()
    {
        return $this->hasMany(CamDeliveredProducts::class);
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
