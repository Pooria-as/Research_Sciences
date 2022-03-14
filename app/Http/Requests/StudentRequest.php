<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            "name"=>['required'],
            'family'=>['required'],
            'grade_id'=>['required'],
            'field_id'=>['required'],
            'image'=>['required'],
            'birthdate'=>['required'],
            'national_code'=>['required'],
            'Gender'=>['required'],
            'entry_date'=>['required']
        ];
    }
}
