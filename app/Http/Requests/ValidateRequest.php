<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "delivery_companyname" => "required",
            "delivery_address" => "required",
            "delivery_tel" => "required",
        ];
    }
    public function messages()
    {
        return [
            "delivery_companyname.required" => "会社名は必須です。",
            "delivery_address.required" => "住所は必須です。",
            "delivery_tel.required" => "電話番号は必須です.",
        ];
    }
}
