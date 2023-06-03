<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.string' => 'Необходимо ввести строку [А-а,Я-я]',
            'content.required' => 'Это поле обязательно для заполнения',
            'content.string' => 'Необходимо ввести строку [А-а,Я-я]',
            'main_image.required' => 'Это поле обязательно для заполнени',
            'main_image.file' => 'Выберите файл',
            'category_id.required' => 'Это поле обязательно для заполнени',
            'category_id.integer' => 'Выберите категорию',
            'category_id.exists' => 'Такой категории не существует',
            'tag_ids.array' => 'Выберите один и более тэгов',
        ];
    }
}
