<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            'name' => 'required|unique:animals|max:255|min:3',
            'image' => 'required|URL',
            'species' => 'required|max:255|min:3',
            'weight' => 'required|numeric|min:0',
            'alimentation' => 'required|max:255|min:3',
            'extintion' => 'required|max:255|min:3',
            'colour' => 'required|max:255|min:3',
            'habitat' => 'required|max:255|min:3',
            'life_duration' => 'required|max:255|min:3',
        ];
    }
}
