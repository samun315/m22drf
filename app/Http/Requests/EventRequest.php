<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
        if (isset($this->event_id)) {

            return [
                'title'         => ['required', Rule::unique('events')->ignore($this->event_id)],
                'details'       => 'required',
                'category_name' => 'required',
                'date'          => 'required',
                // 'banner_img'    => 'required',
                'status'        => 'required',
            ];
        }

        return [
            'title'         => 'required|unique:events,title',
            'category_name' => 'required',
            'details'       => 'required',
            'date'          => 'required',
            'banner_img'    => 'required',
            'status'        => 'required',
        ];
    }
}
