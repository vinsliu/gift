<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGiftRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|string|min:3|max:50',
            'url'       => 'nullable|url|url:http,https',
            'details'   => 'nullable|string',
            'price'     => 'required|numeric|decimal:0,2',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required'  => 'Le nom du cadeau est obligatoire.',
            'name.min'       => 'Le nom doit faire au moins :min caractères.',
            'name.max'       => 'Le nom ne peut pas dépasser :max caractères.',
            'url.url'        => 'L\'url doit débuter avec http ou https.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric'  => 'Le prix doit être un nombre.',
        ];
    }
}
