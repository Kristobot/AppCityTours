<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
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
            if ($this->method() === 'PUT') {
                return [
                    'tourist_package_id' => ['required','integer','exists:tourist_package,id'],
                    'travel_at' => ['required','date'],
                ];
            } else {
                return [
                    'tourist_package_id' => ['nullable','integer','exists:tourist_package,id'],
                    'travel_at' => ['nullable','date'],
                ];
            }
    }
}
