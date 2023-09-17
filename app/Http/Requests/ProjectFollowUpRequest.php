<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFollowUpRequest extends FormRequest
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
        if (isset($this->volunteer_id)) {

            return [
                'name'              => 'required',
                'designation'       => 'required',
                'facebook_link'     => 'required',
                'instagram_link'    => 'required',
                'twitter_link'      => 'required',
                'status'            => 'required',
            ];
        }

        return [
            'name'              => 'required',
            'designation'       => 'required',
            'profile_img'       => 'required',
            'facebook_link'     => 'required',
            'instagram_link'    => 'required',
            'twitter_link'      => 'required',
            'status'            => 'required',
        ];
    }
}
