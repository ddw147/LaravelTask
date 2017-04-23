<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

                'user_id'=>'required',
                'title'=>'required'
                ];
    }

    public function messages()
    {
        return [

            'user_id.required'=>'please select user',
            'user_id.title'=>'please enter title'

        ];
    }

}
