<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EstateOilCar extends Model
{
    use HasFactory;
    
    public function EstateOilStorage()
    {
        return $this->hasMany(EstateOilStorage::class);
    }
    
    public function EstateOilInquiry()
    {
        return $this->hasMany(EstateOilInquiry::class);
    }
}
