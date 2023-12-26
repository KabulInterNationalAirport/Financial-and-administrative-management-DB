<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class OrgStuffDp extends Model
{
    use HasFactory;

    public function DpDamagedProducts()
    {
        return $this->hasMany(DpDamagedProducts::class);
    }
    public function DpDeliveredProducts()
    {
        return $this->hasMany(DpDeliveredProducts::class);
    }
}
