<?php

use Illuminate\Database\Seeder;

class UserHasUserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds[] = [
            'id_user' => '1',
            'id_user_rol' => '1',
        ];
        DB::table('user_has_user_roles')->insert($seeds);
    }
}
