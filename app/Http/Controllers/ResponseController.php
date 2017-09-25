<?php
namespace App\Http\Controllers;

class ResponseController extends Controller
{
    private static $error_codes = [
        'OK' => '200',
        'CREATED' => '201',
        'BAD REQUEST' => '400',
        'UNAUTHORIZED' => '401',
        'NOT FOUD' => '404',
    ];
    private static $response =
        [
            'errors' => false,
            'success' => false,
            'messages' => [],
            'data' => []
        ];

    public static function error_codes()
    {
        return self::$error_codes;
    }

    public static function set_errors($errors)
    {
        self::$response['errors'] = $errors;
    }

    public static function set_messages($messges)
    {
        self::$response['messages'][] = $messges;
    }

    public static function set_data($data)
    {
        self::$response['data'] = array_merge($data, self::$response['data']);
    }

    public static function response($status)
    {
        if (!self::$response['errors']) {
            self::$response['success'] = true;
        }
        return response()->json(self::$response, self::$error_codes[$status]);
    }

    public static function has_errors()
    {
        return self::$response['errors'];
    }

    public static function preprint($data, $die = false)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        if ($die) {
            die;
        }
    }
}