<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepoReportRequest extends FormRequest
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
            'task' => 'required|string|max:255',
            'task_details' => 'required|string',
            'related_office' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,png,jpg,jpeg,gif',
        ];
    }
}