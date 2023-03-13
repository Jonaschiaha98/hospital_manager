<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepostRequest extends FormRequest
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
            "phone" => "required|max:255|unique:posts,phone",
            "app_date" => "required",
            "email" => "required|max:255",
            "doctor_name" => "required|max:255",
            
        ];
    }
}
