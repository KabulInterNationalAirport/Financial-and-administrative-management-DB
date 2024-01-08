<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DpNewArrivalsRequest extends FormRequest
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
            'category' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'unit' => 'required|string|max:255',
            'price' => 'required|numeric',
            'm_7' => 'required|string|max:255',
            'order_no' => 'required|string|max:255',
            'date' => 'required|string|max:20',
            'related_office' => 'required|string|max:255',
            'taken_from' => 'required|string|max:255',
            'trustee_id' => 'required|integer',
            'total_products_id' => 'required|integer',
        ];
    }
}
