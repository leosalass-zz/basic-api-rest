<?php

namespace App\Http\Controllers;

use App\UserPermission;
use Validator;
use Illuminate\Http\Request;

class UserPermissionsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::response('BAD REQUEST');
        }

        if (!$permission = UserPermission::create([
            'name' => $request->name,
            'description' => $request->description,
        ])) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("Error creando el permiso");
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("permiso creado");
        ResponseController::set_data(['rol_id' => $permission->id]);
        return ResponseController::response('CREATED');
    }

    public function get()
    {
        ResponseController::set_data(['permisos' => UserPermission::all()]);
        return ResponseController::response('OK');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            'id_permission' => 'required|integer|exists:user_permissions,id',
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::response('BAD REQUEST');
        }

        try {
            $permission = UserPermission::find($request->id_permission);
            $permission->name = $request->name;
            $permission->description = $request->description;
            $permission->save();
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error actualizando el permiso");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("permiso actualizado");
        ResponseController::set_data(['permiso_id' => $permission->id]);
        return ResponseController::response('OK');
    }

    public function destroy(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            'id_permission' => 'required|integer|exists:user_permissions,id',
        ]);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::response('BAD REQUEST');
        }

        try {
            UserPermission::destroy($request->id_permission);
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error eliminado el permiso");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("permiso eliminado");
        return ResponseController::response('OK');
    }
}
