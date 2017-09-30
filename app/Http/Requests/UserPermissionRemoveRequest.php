<?php

namespace App\Http\Requests;

class UserPermissionRemoveRequest extends GenericResposeRequest
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
            'id_permission' => 'required|integer|min:1|exists:user_permissions,id',
        ];
    }
}
