<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds[] = [
            'name' => 'admin del sistema',
            'id_state' => 'active',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secred'),
        ];

        DB::table('users')->insert($seeds);
    }
}
