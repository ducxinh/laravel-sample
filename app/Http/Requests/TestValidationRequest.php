<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateDifference;


class TestValidationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'array_date' => ['required', 'array', new DateDifference],
            'array_date.*.start_date' => ['required', 'date'],
            'array_date.*.end_date' => ['required', 'date'],
        ];
    }
}
