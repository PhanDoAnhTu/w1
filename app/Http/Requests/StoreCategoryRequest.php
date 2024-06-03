<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'require|min:6'
        ];
    }
    public function messages(): array
    {
        return [
            'name.require' => 'Tên danh mục không được bỏ trống!',
            'name.min' => 'Tên danh mục ít nhất 6 ký tự!'
        ];
    }
}
