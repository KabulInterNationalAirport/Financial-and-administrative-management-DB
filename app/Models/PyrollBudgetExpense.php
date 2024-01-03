<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PyrollBudgetExpense extends Model
{
    use HasFactory;

    public function ProjectCode(): BelongsTo
    {
        return $this->belongsTo(ProjectCode::class);
    }
    public function ExpenseCode(): BelongsTo
    {
        return $this->belongsTo(ExpenseCode::class);
    }
}
