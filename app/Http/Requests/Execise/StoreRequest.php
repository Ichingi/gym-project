<?php

namespace App\Http\Requests\Execise;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'exercise_name' => 'string|required',
            'group' => 'integer|required',
            'approach' => 'integer|required',
            'repetition' => 'integer|required',
            'weight' => 'integer|required',
        ];
    }
}
