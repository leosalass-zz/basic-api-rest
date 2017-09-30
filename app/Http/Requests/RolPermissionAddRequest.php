<?php

namespace App\Http\Requests;

class RolPermissionAddRequest extends GenericResposeRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_rol' => 'required|integer|min:1|exists:user_roles,id',
            'id_permission' => 'required|integer|min:1|exists:user_permissions,id',
        ];
    }
}
