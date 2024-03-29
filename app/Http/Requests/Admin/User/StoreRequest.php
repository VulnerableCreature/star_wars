<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role_id' => 'required|integer|exists:roles,id',
            'login' => 'required|string|unique:users'
        ];
    }

    public function messages()
    {
        return [
//            'title.required' => 'Это поле обязательно для заполнения',
//            'title.string' => 'Необходимо ввести строку [А-а,Я-я]',
//            'content.required' => 'Это поле обязательно для заполнения',
//            'content.string' => 'Необходимо ввести строку [А-а,Я-я]',
//            'main_image.required' => 'Это поле обязательно для заполнения',
//            'main_image.file' => 'Выберите файл',
//            'category_id.required' => 'Это поле обязательно для заполнения',
//            'category_id.integer' => 'Выберите категорию',
//            'category_id.exists' => 'Такой категории не существует',
//            'tag_ids.array' => 'Выберите один и более тэгов',
        ];
    }
}
