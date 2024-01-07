<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CamCarsDeliveredRequest extends FormRequest
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
            'based_on' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'order_office' => 'required|string|max:255',
            'order_date' => 'required|string|max:20',
            'delivered_date' => 'required|string|max:20',
            'file' => 'required|file|mimes:pdf,png,jpg,jpeg,gif',
            'cam_org_stuff_id' => 'required|integer',
            'total_products_id' => 'required|integer',
        ];
    }
}
