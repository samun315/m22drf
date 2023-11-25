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
                'name'                          => 'required',
                'email'                         => ['required', Rule::unique('users')->ignore($this->user_id)],
                'phone_number'                  => ['required', Rule::unique('users')->ignore($this->user_id)],
                'present_job'                   => 'required',
                'about_your_self'               => 'required',
                'date_of_birth'                 => 'required',
                'spouse_name'                   => 'required',
                'personal_charity'              => 'required',
                'philosopy_life'                => 'required',
                'present_address'               => 'required',
                'permanent_address'             => 'required',
                'village_address'               => 'required',
                'children_details'              => 'required',
                'extra_curicular_activities'    => 'required',
                'lifetime_achievement'          => 'required',
                'special_occasions'             => 'required',
                // 'passport_photo'                => 'required',
                'member_status'                 => 'required',
                'executive_status'              => 'required',
                'status'                        => 'required'
            ];
        }

        return [
            'name'                          => 'required',
            'email'                         => 'required|unique:users,email',
            'phone_number'                  => 'required|unique:users,phone_number',
            'present_job'                   => 'required',
            'about_your_self'               => 'required',
            'date_of_birth'                 => 'required',
            'spouse_name'                   => 'required',
            'personal_charity'              => 'required',
            'philosopy_life'                => 'required',
            'present_address'               => 'required',
            'permanent_address'             => 'required',
            'village_address'               => 'required',
            'children_details'              => 'required',
            'extra_curicular_activities'    => 'required',
            'lifetime_achievement'          => 'required',
            'special_occasions'             => 'required',
            'passport_photo'                => 'required',
            'member_status'                 => 'required',
            'executive_status'              => 'required',
            'status'                        => 'required'
        ];
    }
}
