<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCodeRequest extends FormRequest
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
            'code' => 'required|numeric|min:0',
            'unit' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'remain_amount' => 'required|numeric|min:0',
            'expense_amount' => 'required|numeric|min:0',
        ];
    }
}
