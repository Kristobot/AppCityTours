<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteRequest extends FormRequest
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
        if ($this->method() === 'put') {
            return [
                //
                'name' => ['required','string'],
                'review' => ['required','string'],
                'department_id' => ['required','integer','exists:departments,id'],
                'location_y' => ['required','string'],
                'location_x' => ['required','string']
            ];
        } else {
            return [
                //
                'name' => ['nullable','string'],
                'review' => ['nullable','string'],
                'department_id' => ['nullable','integer','exists:departments,id'],
                'location_y' => ['nullable','string'],
                'location_x' => ['nullable','string']
            ];
        }
    }
}
