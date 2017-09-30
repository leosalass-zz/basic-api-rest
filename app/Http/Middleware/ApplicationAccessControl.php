<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ResponseController;
use App\UserRol;
use Closure;
use Illuminate\Support\Facades\Auth;

class ApplicationAccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next, ...$required_permissions)
    {
        $permissions = [];
        if (Auth::guest()) {
            $roles[] = UserRol::find('5');//unregistered predefined user_rol
        } else {
            $roles = Auth::user()->roles;
        }

        foreach ($roles as $index => $rol) {
            foreach ($rol->permissions as $permission) {
                $permissions[] = $permission->name;
            }
        }

        if (in_array('crud.all', $permissions)) {
            return $next($request);
        }

        $required_elements = count($required_permissions);
        $intersect_elements = count(array_intersect($required_permissions, $permissions));

        if ($required_elements != $intersect_elements) {
            ResponseController::set_errors('acceso restringido');
            return ResponseController::response('UNAUTHORIZED');
        }

        return $next($request);
    }
}
