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
            'phone'=>'required|min:10|max:20',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:5|max:20'
        ];
    }
    public function messages()
    {
        return [
            'sponsor_id.required'=>'укажите id-номер Вашего спонсора',
            'sponsor_id.exists'=>'спонсор с таким id-номером не найден',
            'name.required'=>'укажите Ваше полное ФИО',
            'name.string'=>'ФИО должно состоять из букв',
            'name.max'=>'ФИО не должно превышать 60 символов',
            'phone.required'=>'укажите Ваш номер телефона',
            'phone.min'=>'укажите в формате 89528900109',
            'phone.max'=>'укажите в формате 89528900109',
            'email.required'=>'укажите Вашу электронную почту',
            'email.unique'=>'этот почтовый ящик уже кем-то зарегистрирован',
            'password.required'=>'укажите пароль',
            'password.min'=>'пароль должен содержать от 5 до 20 символов',
            'password.max'=>'пароль должен содержать от 5 до 20 символов'
        ];
    }    
}
