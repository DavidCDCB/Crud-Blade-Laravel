<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'publication' => 'required|min:3|max:50',
            'content_publication' => 'required|min:3|max:500',
            'state_publication' => 'required',
            'category_id'=> 'required'
        ];
    }
}
