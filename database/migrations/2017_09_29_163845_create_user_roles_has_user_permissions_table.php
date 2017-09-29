<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesHasUserPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles_has_user_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user_rol')->unsigned();
            $table->integer('id_user_permission')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('user_roles_has_user_permissions', function (Blueprint $table){
            $table->foreign('id_user_rol')->references('id')->on('user_roles');
            $table->foreign('id_user_permission')->references('id')->on('user_permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles_has_user_permissions');
    }
}
