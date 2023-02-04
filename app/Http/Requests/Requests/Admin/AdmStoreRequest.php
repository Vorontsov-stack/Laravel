<?php

namespace App\Http\Requests\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdmStoreRequest extends FormRequest
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
            'title'=> 'string',
            'post_content'=>'string',
            'image'=>'string',
            'likes'=>'',
            'category_id'=> '',
            'tags'=> '',
        ];
    }
}
