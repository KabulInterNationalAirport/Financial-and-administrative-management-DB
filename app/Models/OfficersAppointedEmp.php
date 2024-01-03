<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class OfficersAppointedEmp extends Model
{
    use HasFactory;

    public function OfficersBalance()
    {
        return $this->hasMany(OfficersBalance::class);
    }
}
