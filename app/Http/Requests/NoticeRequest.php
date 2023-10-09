<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
        if (isset($this->donation_request_id)) {

            return [
                'title'             => 'required',
                'details'           => 'required',
                'status'            => 'required',
            ];
        }

        return [
            'title'             => 'required',
            'details'           => 'required',
            'status'            => 'required',
        ];
    }
}
