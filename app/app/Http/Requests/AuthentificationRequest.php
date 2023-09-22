<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AuthentificationRequest extends FormRequest
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
        $is_Signin = Rule::requiredIf(function () {
            return $this->routeIs('auth.signin') == true;
        });
        return [
            'name' => [$is_Signin],
            'adress' => [$is_Signin],
            'work' => [$is_Signin],
            'school' => [$is_Signin],
            'pseudo' => [$is_Signin],
            'email' => ['email', $is_Signin],
            'login' => [!$is_Signin],
            'password' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(
            response()->json([
                'error' => $validator->errors(),
                'status' => 'error'
            ])
        )
        );
    }
    protected function emailOrPseudo($login)
    {
        $bool = filter_var($login, FILTER_VALIDATE_EMAIL);
        return $bool ? 'email' : 'pseudo';
    }

    public function validated()
    {
        $validate = $this->validator->validated();
        if ($this->routeIs('auth.login')) {
            $cle = $this->emailOrPseudo($validate['login']);
            return [
                'password' => $validate['password'],
                $cle => $validate['login']
            ];
        }
        return $validate;
    }
}
