<?php

namespace App\Http\Requests;

class UserPermissionAddRequest extends GenericResposeRequest
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
            'action' => 'required|string|min:1|in:add,remove',
        ];
    }
}
