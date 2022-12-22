<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules=[
            'password'=>'required|alpha_num|min:8|confirmed',
            'password_confirmation'=>'required|alpha_num|min:8'
        ];

        return $rules;
    }

    public function attributes()
    {
        $attributes = [
            'name' => 'Nombre',
            'email' => 'Correo electrónico',
            'password' => 'Contraseña',
            'password_confirmation'=>'Confirmación de contraseña'
        ];

        return $attributes;
    }
}
