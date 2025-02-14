<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
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
            'title' => 'required|string|max:200|unique:comics,title,',
            'description' => 'string|nullable',
            'thumb' => 'string|nullable',
            'price' => 'integer|nullable',
            'series' => 'string|nullable',
            'sale_date' => 'date|nullable',
            'type' => '|nullable',
            'artists' => 'string|nullable',
            'writers' => 'string|nullable',
        ];
    }
}
