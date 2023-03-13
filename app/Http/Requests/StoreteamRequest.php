<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreteamRequest extends FormRequest
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
            "name" => "required|max:255|unique:teams,name,",
            "phone" => "required|max:255|unique:posts,phone",
            "email" => "required|max:255",
            "carrier" => "required|max:255",
            "image_path" => "max:255",
        ];
    }
}
