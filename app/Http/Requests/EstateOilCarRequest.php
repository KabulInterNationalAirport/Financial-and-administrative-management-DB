<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateOilCarRequest extends FormRequest
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
            'driver' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'id_card' => 'required|string|max:255',
            'vehicale_no' => 'required|string|max:255',
            'oil_total_valume' => 'required|numeric',
            'estate_oil_storages_id' => 'required|integer',
            'estate_oil_inquiries_id' => 'required|integer',
        ];
    }
}
