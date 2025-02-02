<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:6'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Tên tiêu đề không được bỏ trống!',
            'title.min' => 'Tên tiêu đề ít nhất 6 ký tự!'
        ];
    }
}
