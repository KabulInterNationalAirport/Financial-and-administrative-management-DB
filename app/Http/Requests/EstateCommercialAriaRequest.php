<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateCommercialAriaRequest extends FormRequest
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
            'contract_person' => 'required|string|max:255',
            'monthly_rent' => 'required|numeric',
            'area_mm' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_date' => 'required|string|max:20',
            'end_date' => 'required|string|max:20',
            'contract_details' => 'required|string',
            'activity_form' => 'required|string|max:255',
            'state' => 'required|string|max:50',
            'contract_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
