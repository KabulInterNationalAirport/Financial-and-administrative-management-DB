<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DpCarsRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'engine_no' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'color' => 'required|string|max:255',
            'no_palet' => 'required|string|max:255',
            'trustee_id' => 'required|integer',
            'total_products_id' => 'required|integer',
        ];
    }
}
