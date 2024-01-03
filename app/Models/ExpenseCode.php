<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ExpenseCode extends Model
{
    use HasFactory;

    public function PyrollBudgetExpense()
    {
        return $this->hasMany(PyrollBudgetExpense::class);
    }
}
