<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'time_to_read' => ['required', 'integer'],
            'image_url' => [
                $this->isMethod('POST') ? 'required' : 'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
            'content' => ['required'],
            'tags' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
            'slug' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
