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

        Route::post('register', 'UsersController@register')->middleware(['ApplicationAccessControl:users.create','auth:api']);

        Route::get('id/{id_user}/roles', 'UsersController@roles')->middleware(['ApplicationAccessControl:user_has_user_roles.read','auth:api']);
        Route::post('roles', 'UsersController@add_rol')->middleware(['ApplicationAccessControl:user_has_user_roles.create','auth:api']);
        Route::delete('roles', 'UsersController@remove_rol')->middleware(['ApplicationAccessControl:user_has_user_roles.delete','auth:api']);
        Route::get('id/{id_user}/permissions', 'UsersController@permissions')->middleware(['ApplicationAccessControl:user_permissions.read','auth:api']);
        Route::post('permissions', 'UsersController@add_permission')->middleware(['ApplicationAccessControl:user_permissions.create','auth:api']);
        Route::delete('permissions', 'UsersController@remove_permission')->middleware(['ApplicationAccessControl:user_permissions.delete','auth:api']);

    });

    /*
     * ROLES ROUTES
     */
    Route::group(['prefix' => 'roles'], function () {

        Route::post('', 'UserRolesController@store')->middleware(['ApplicationAccessControl:user_roles.create','auth:api']);
        Route::get('', 'UserRolesController@get')->middleware(['ApplicationAccessControl:user_roles.read','auth:api']);
        Route::patch('', 'UserRolesController@update')->middleware(['ApplicationAccessControl:user_roles.update','auth:api']);
        Route::delete('', 'UserRolesController@destroy')->middleware(['ApplicationAccessControl:user_roles.delete','auth:api']);

        Route::get('id/{id_rol}/permissions', 'UserRolesController@permissions')->middleware(['ApplicationAccessControl:user_roles_has_user_permissions.read','auth:api']);
        Route::post('permissions', 'UserRolesController@add_permission')->middleware(['ApplicationAccessControl:user_roles_has_user_permissions.create','auth:api']);
        Route::delete('permissions', 'UserRolesController@remove_permission')->middleware(['ApplicationAccessControl:user_roles_has_user_permissions.delete','auth:api']);

    });

});
