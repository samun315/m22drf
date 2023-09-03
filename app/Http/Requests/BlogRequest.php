<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        if (isset($this->blog_id)) {

            return [
                'title'         => ['required', Rule::unique('blogs')->ignore($this->blog_id)],
                'details'       => 'required',
                // 'banner_img'    => 'required',
                'status'        => 'required',
            ];
        }

        return [
            'title'         => 'required|unique:blogs,title',
            'details'       => 'required',
            'banner_img'    => 'required',
            'status'        => 'required',
        ];
    }
}
