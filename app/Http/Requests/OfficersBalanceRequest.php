<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficersBalanceRequest extends FormRequest
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
            'balance_name' => 'required|string|max:255',
            'total_days' => 'required|numeric|min:0',
            'remain_days' => 'required|numeric|min:0',
            'used_days' => 'required|numeric|min:0',
            'officers_appointed_emps_id' => 'required|array',
            'officers_appointed_emps_id.*' => 'required|integer|min:1',
        ];
    }
}
