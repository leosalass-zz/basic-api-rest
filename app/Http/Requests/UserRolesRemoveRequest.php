<?php

namespace App\Http\Requests;

class UserRolesRemoveRequest extends GenericResposeRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_user' => 'required|integer|min:1|exists:users,id',
            'id_rol' => 'required|integer|min:1|exists:user_roles,id',
        ];
    }
}
