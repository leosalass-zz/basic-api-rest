<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'id_state' => '1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ];

        DB::table('users')->insert($seeds);
    }
}
