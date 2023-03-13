<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredoctorRequest extends FormRequest
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
            "doctor_name" => "required|max:255|unique:doctors,doctor_name,",
            "phone" => "required|max:255|unique:doctors,phone",
            "email" => "required|max:255",
            "doctor_image" => "max:255",
            "specialization" => "required|max:255",            
        ];
    }
}
