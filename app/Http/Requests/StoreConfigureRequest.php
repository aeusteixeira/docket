<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfigureRequest extends FormRequest
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
            'short_name' => 'required|string|max:30',
            'full_name' => 'required|string|max:100',
            'short_description' => 'required|string|max:80',
            'full_description' => 'required|string|max:500',
            'image' => 'required|image|mimes:png|max:15',
            'privacy_policy' => 'required|string|max:250',
            'terms_and_conditions' => 'required|string|max:250',
        ];
    }
}
