<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if ($this->path() == 'hello'){
        return true;
      }else{
        return false;
      }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'mail' =>'email',
          'age' => 'numeric|between:0,150',
            //
        ];
    }

    public function messages(){
      return [
        'name.required' => '请输入名字',
        'mail.email' =>'请输入邮箱地址',
        'age.numeric' => '请输入数字',
        'age.between' => '请输入0-150',
      ];
    }
}
