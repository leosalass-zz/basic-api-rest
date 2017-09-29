<?php

use Illuminate\Database\Seeder;

class UserRolesHasUserPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds[] = [
            'id_user_rol' => '1',
            'id_user_permission' => '1',
        ];
        $seeds[] = [
            'id_user_rol' => '1',
            'id_user_permission' => '2',
        ];
        DB::table('user_roles_has_user_permissions')->insert($seeds);
    }
}
