<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateOilStorageRequest extends FormRequest
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
            'company_name' => 'required|string|max:255',
            'area_mm' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'start_date' => 'required|string|max:20',
            'end_date' => 'required|string|max:20',
            'oil_total_volume' => 'required|numeric',
            'oil_remain_volume' => 'required|numeric',
            'contract_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
