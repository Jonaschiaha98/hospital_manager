<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class post extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "patient_name" => "required|max:255",
            
            "phone" => "required|max:255|unique:titles,title",
            "app_date" => "required",
            "doctor_name" => "required",
            "email" => "max:255",
            "name" => "required|max:255|unique:titles,title",
        ];
    }
}
