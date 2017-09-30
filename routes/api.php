<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * USERS: no validation
 */
Route::group(['prefix' => 'users'], function () {
    Route::post('register', 'UsersController@register');
});

Route::group(['prefix' => 'v1'], function () {

    /*
     * USERS ROUTES
     */
    Route::group(['prefix' => 'users'], function () {
        Route::group(['prefix' => 'register', 'middleware' =>
            [
                'ApplicationAccessControl:users.create',
                'auth:api',
            ]
        ], function () {
            Route::post('', 'UsersController@register');
        });
    });

});
