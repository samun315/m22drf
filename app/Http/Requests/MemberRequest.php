<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MemberRequest extends FormRequest
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
        if (isset($this->user_id)) {

            return [
                'name'     => 'required',
                'email'    => ['required', Rule::unique('users')->ignore($this->user_id)]
            ];
        }

        return [
            'name'               => 'required',
            'email'              => 'required|unique:users,email',
            'passport_photo'     => 'required'
        ];
    }
}
