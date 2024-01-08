<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrusteeDpRequest extends FormRequest
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
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'related_office' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'id_card' => 'required|string|max:255',
            'phone' => 'required|numeric|max:14',
            'address' => 'required|string|max:255',
        ];
    }
}
