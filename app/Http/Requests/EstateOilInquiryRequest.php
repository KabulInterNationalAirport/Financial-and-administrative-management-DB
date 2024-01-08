<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateOilInquiryRequest extends FormRequest
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
            'company_name'=>'required|string|max:255',
            'date' => 'required|string:max:20',
            'car_number' => 'required|string|max:255',
            'oil_total_volume' => 'required|numeric',
            'follow_person' => 'required|string|max:255',
            'inquiry_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
