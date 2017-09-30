<?php

namespace App\Http\Requests;

use App\Http\Controllers\ResponseController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class UsersUpdateRequest extends FormRequest
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
            'id_user' => 'required|integer|min:1|exists:users,id',
            'password' => 'nullable|string|min:6|confirmed',
            'email' => 'nullable|string|email|max:255|unique:users',
            'name' => 'nullable|string|max:99',
            'state' => 'nullable|integer|min:1|exists:user_states,id',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        ResponseController::set_errors(true);
        ResponseController::set_messages($validator->errors()->toArray());
        throw new HttpResponseException(ResponseController::response('BAD REQUEST'));
    }
}
