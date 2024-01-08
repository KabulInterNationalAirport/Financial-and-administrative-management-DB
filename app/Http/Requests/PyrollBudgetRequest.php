<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PyrollBudgetRequest extends FormRequest
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
            'budget_type' => 'required|string|max:255',
            'budget_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|string|max:20',
            'project_codes_id' => 'required|integer|exists:project_codes,id',
        ];
    }
}
