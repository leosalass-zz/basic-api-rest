<?php

namespace App\Http\Controllers;

use App\UserRol;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\RolStoreRequest;
use App\Http\Requests\RolUpdateRequest;
use App\Http\Requests\RolDestroyRequest;
use App\Http\Requests\RolPermissionAddRequest;
use App\Http\Requests\RolPermissionRemoveRequest;

class UserRolesController extends Controller
{
    public function store(RolStoreRequest $request)
    {
        if (!$rol = UserRol::create([
            'name' => $request->name,
            'description' => $request->description,
        ])) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("Error creando el rol");
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("rol creado");
        ResponseController::set_data(['rol_id' => $rol->id]);
        return ResponseController::response('CREATED');
    }

    public function get()
    {
        ResponseController::set_data(['roles' => UserRol::all()]);
        return ResponseController::response('OK');
    }

    public function update(RolUpdateRequest $request)
    {
        try {
            $rol = UserRol::find($request->id_rol);
            $rol->name = $request->name;
            $rol->description = $request->description;
            $rol->save();
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error actualizando el rol");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("rol actualizado");
        ResponseController::set_data(['rol_id' => $rol->id]);
        return ResponseController::response('OK');
    }

    public function destroy(RolDestroyRequest $request)
    {
        try {
            UserRol::destroy($request->id_rol);
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error eliminado el rol");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("rol eliminado");
        return ResponseController::response('OK');
    }

    public function permissions($id_rol)
    {
        $validator = Validator::make(['id_rol' => $id_rol], [
            'id_rol' => 'required|integer|min:1|exists:user_roles,id',
        ]);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::response('BAD REQUEST');
        }

        $roles[] = UserRol::find($id_rol);

        $permissions = [];
        foreach ($roles as $index => $rol) {
            foreach ($rol->permissions as $permission) {
                $permissions[$permission->id] = $permission->name;
            }
        }

        ResponseController::set_data(['permissions' => $permissions]);

        return ResponseController::response('OK');
    }

    public function add_permission(RolPermissionAddRequest $request)
    {
        $rol = UserRol::find($request->id_rol);

        try {
            $rol->permissions()->attach($request->id_permission);
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error asignando el permiso");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("permiso asignado");
        return ResponseController::response('OK');
    }

    public function remove_permission(RolPermissionRemoveRequest $request)
    {
        $rol = UserRol::find($request->id_rol);

        try {
            $rol->permissions()->detach($request->id_permission);
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error eliminando el permiso");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_messages("permiso eliminado");
        return ResponseController::response('OK');
    }
}
