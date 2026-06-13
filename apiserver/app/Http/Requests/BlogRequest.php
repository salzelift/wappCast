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
            'image_url' => ['required'],
            'content' => ['required'],
            'tags' => ['required'],
            'category_id' => ['required', 'exists:categories'],
            'slug' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
