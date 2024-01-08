<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PyrollAppointedEmpRequest extends FormRequest
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
            'en_name' => 'required|string|max:255',
            'ps_name' => 'required|string|max:255',
            'en_last_name' => 'required|string|max:255',
            'ps_last_name' => 'required|string|max:255',
            'en_father_name' => 'required|string|max:255',
            'ps_father_name' => 'required|string|max:255',
            'birth_date' => 'required|string|max:20',
            'appointment_date' => 'required|string|max:20',
            'position_no' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'bank_card' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'employee_doc' => 'required|file|mimes:pdf,png,jpg,jpeg,gif,doc,docx,xls,xlsx',
            'state' => 'required|string|max:255',
        ];
    }
}
