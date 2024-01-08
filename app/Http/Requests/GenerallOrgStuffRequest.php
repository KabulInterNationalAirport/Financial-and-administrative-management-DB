<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerallOrgStuffRequest extends FormRequest
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
            'position_no' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'salary' => 'required|numeric|min:0',
        ];
    }
}
