<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Если оставить по умолчанию
        // return false;
        // то будет ошибка 403|unathorized access

        // чтобы отключить эту ошибку
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
            'sponsor_id'=>'required|exists:users',
            'name'=>'required|string|max:60',
            'phone'=>'required|min:10|max:12',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:3|max:20'
        ];
    }
}
