<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Http\Request;

//TODO: se debe agregar arriba todos los modelos que se deseen usar con este controlador


class GenericController extends Controller
{
    public static function store(Request $request, $model, $response_name = 'object')
    {
        if (!$object = $model::create($request->all())) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("Error creando el registro");
            return ResponseController::set_status_code('BAD REQUEST');
        }

        ResponseController::set_messages("registro creado");
        ResponseController::set_data([$response_name . '_id' => $object->id]);
        return ResponseController::set_status_code('CREATED');
    }

    public static function get_only($model, $id, $response_name = 'object', $table)
    {
        $validator = Validator::make(['id' => $id], [
            'id' =>
                [
                    'required',
                    Rule::exists($table, 'id')->where(function ($query) {
                        $query->where('deleted_at', null);
                    })
                ],
        ]);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::set_status_code('BAD REQUEST');
        }

        ResponseController::set_data([$response_name => $model::find($id)]);
        return ResponseController::set_status_code('OK');
    }

    public static function get($model, $response_name = 'object')
    {
        ResponseController::set_data([$response_name => $model::all()]);
        return ResponseController::set_status_code('OK');
    }

    public static function update(Request $request, $model, $request_exceptions_array, $response_name = 'object_id')
    {
        try {
            $object = $model::where('id', $request->id);
            $object->update($request->except($request_exceptions_array));
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error actualizando el registro");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::set_status_code('BAD REQUEST');
        }

        ResponseController::set_messages("registro actualizado");
        return ResponseController::set_status_code('OK');

    }

    public static function destroy($id, $model)
    {
        try {
            $model::destroy($id);
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error eliminado el registro");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::set_status_code('BAD REQUEST');
        }

        ResponseController::set_messages("registro eliminado");
        return ResponseController::set_status_code('OK');
    }

    public static function get_childs($table, $id, $model, $function_name)
    {
        $validator = Validator::make(['id' => $id], [
            'id' =>
                [
                    'required',
                    Rule::exists($table, 'id')->where(function ($query) {
                        $query->where('deleted_at', null);
                    })
                ],
        ]);

        if ($validator->fails()) {
            ResponseController::set_errors(true);
            ResponseController::set_messages($validator->errors()->toArray());
            return ResponseController::set_status_code('BAD REQUEST');
        }

        try {
            $object = $model::find($id);
            ResponseController::set_data([$function_name => $object->$function_name]);
            return ResponseController::set_status_code('OK');
        } catch (\Exception $e) {
            ResponseController::set_errors(true);
            ResponseController::set_messages("error obteniendo los registros");
            ResponseController::set_messages($e->getMessage());
            return ResponseController::set_status_code('BAD REQUEST');
        }
    }
}
