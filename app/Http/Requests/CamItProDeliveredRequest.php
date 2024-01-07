<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CamItProDeliveredRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Set this to true if you want to authorize the request
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
            'serial_no' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'hd' => 'required|string|max:255',
            'based_on' => 'required|string|max:255',
            'order_office' => 'required|string|max:255',
            'order_date' => 'required|string|max:20',
            'delivered_date' => 'required|string|max:20',
            'file' => 'required|file|mimes:pdf,png,jpg,jpeg,gif',
            'number' => 'required|string|max:255',
            'cam_org_stuff_id' => 'required|integer',
            'total_products_id' => 'required|integer',
        ];
    }
}