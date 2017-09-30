<?php

namespace App\Http\Requests;

class PermissionStoreRequest extends GenericResposeRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:255',
        ];
    }
}
