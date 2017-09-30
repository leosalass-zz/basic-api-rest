<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasUserPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_user_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_user_permission')->unsigned();
            $table->enum('action', ['add', 'remove']);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('user_has_user_permissions', function (Blueprint $table){
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_user_permission')->references('id')->on('user_permissions');
            $table->unique(['id_user', 'id_user_permission'], 'user_permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_user_permissions');
    }
}
