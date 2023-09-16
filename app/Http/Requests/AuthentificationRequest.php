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
        return [
            'name' => [Rule::requiredIf(function () {
                return $this->routeIs('auth.signin') == true;
            })],
            'adress' => [Rule::requiredIf(function () {
                return $this->routeIs('auth.signin') == true;
            })],
            'work' => [Rule::requiredIf(function () {
                return $this->routeIs('auth.signin') == true;
            })],
            'school' => [Rule::requiredIf(function () {
                return $this->routeIs('auth.signin') == true;
            })],
            'pseudo' => ['sometimes', Rule::requiredIf(function () {
                return is_null($this->input('email')) || $this->routeIs('auth.signin') == true;
            })],
            'email' => ['email', 'sometimes', Rule::requiredIf(function () {
                return is_null($this->input('pseudo')) || $this->routeIs('auth.signin') == true;
            })],
            'password' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response()->json(['error' => $validator->errors(), 'status' => 'error']))
        );
    }

    public function validated()
    {
        $validate = $this->validator->validated();
        if ($this->routeIs('auth.login')) {
            $logins = ['pseudo', 'email', 'password'];
            $res = [];
            foreach ($logins as $l) {
                $res[$l] = $validate[$l];
            }
            return $res;
        }
        return $validate;
    }
}
