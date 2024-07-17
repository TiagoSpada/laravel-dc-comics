<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicsRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:200', Rule::unique('comics')->ignore($this->comic)],
            'description' => 'string|nullable',
            'thumb' => 'string|nullable',
            'price' => 'integer|nullable|min:0',
            'series' => 'string|nullable',
            'sale_date' => 'date|nullable',
            'type' => '|nullable',
            'artists' => 'string|nullable',
            'writers' => 'string|nullable',
        ];
    }
}
