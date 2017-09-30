<?php

namespace App\Http\Requests;

class PermissionUpdateRequest extends GenericResposeRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_permission' => 'required|integer|exists:user_permissions,id',
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:255',
        ];
    }
}
