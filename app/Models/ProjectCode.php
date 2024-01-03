<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProjectCode extends Model
{
    use HasFactory;

    public function PyrollBudget()
    {
        return $this->hasMany(PyrollBudget::class);
    }
    public function PyrollBudgetExpense()
    {
        return $this->hasMany(PyrollBudgetExpense::class);
    }
}
