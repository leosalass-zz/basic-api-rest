<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|max:255|unique:users',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::response('BAD REQUEST');
        }

        if (!$user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ])) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("Error creando el usuario");
            return ResponseController::response('BAD REQUEST');
        }

        ResponseController::set_data(['user_id' => $user->id]);
        return ResponseController::response('CREATED');
    }
}
