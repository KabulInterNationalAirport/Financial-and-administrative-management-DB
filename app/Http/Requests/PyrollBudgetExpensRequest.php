<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PyrollBudgetExpensRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'year' => 'required|integer', 
            'month' => 'required|integer|between:1,12',
            'amount' => 'required|numeric|min:0',
            'based_on' => 'required|string|max:255',
            'number' => 'numeric|min:0',
            'received_type' => 'required|string|max:255',
            'date' => 'required|string|max:20',
            'project_codes_id' => 'required|integer|exists:project_codes,id',
            'expense_codes_id' => 'required|integer|exists:expense_codes,id',
        ];
    }
}
