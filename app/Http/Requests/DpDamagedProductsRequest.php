<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DpDamagedProductsRequest extends FormRequest
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
            'delivered_emp' => 'required|string|max:255',
            'related_office' => 'required|string|max:255',
            'trustee_id' => 'required|integer',
            'cam_org_stuff_id' => 'required|integer',
        ];
    }
}
