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
        if ($this->path() == "index") {
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                //
            ];
    }
    public function messages()
    {
        return [
            "delivery_companyname.required" => "会社名は必須です。",
            "delivery_address" => "住所は必須項目です。",
            "delvery_tel" => "電話番号は必須項目です.",
        ];
    }
}
