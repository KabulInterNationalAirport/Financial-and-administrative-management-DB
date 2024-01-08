<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateContractRequest extends FormRequest
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
            'contract' => 'required|string|max:255',
            'contract_no' => 'required|string|max:255',
            'contract_reason' => 'required|string|max:255',
            'contract_details' => 'required|string',
            'company' => 'required|string|max:255',
            'executer_num' => 'required|numeric',
            'start_date' => 'required|string|max:20',
            'end_date' => 'required|string|max:20',
            'state' => 'required|string|max:255',
            'contract_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'area_mm' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ];
    }
}
