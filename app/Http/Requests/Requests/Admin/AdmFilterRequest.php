<?php

namespace App\Http\Requests\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdmFilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return 
        [
            'title' => '',
            'post_content' => '',
            'image' => '',
            'category_id' => '',
            'tags' => '',
            'page' => '',
            'per_page' => '',
            
        ];
    }
}
