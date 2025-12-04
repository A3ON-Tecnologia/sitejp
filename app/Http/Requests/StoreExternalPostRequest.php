<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExternalPostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'content_html' => 'required_without:content_md|string',
            'content_md' => 'required_without:content_html|string',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'cover_image_url' => 'nullable|url|max:2048',
            'status' => 'nullable|in:draft,published',
            'published_at' => 'nullable|date',
            'external_id' => 'nullable|string|max:190',
        ];
    }
}
