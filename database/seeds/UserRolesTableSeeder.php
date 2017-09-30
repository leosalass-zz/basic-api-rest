<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = [];

        $seed[] = [
            'name' => 'administrator',
            'description' => 'This is a full permissions user',
        ];
        $seed[] = [
            'name' => 'client',
            'description' => 'this user has limited access from bussines owner',
        ];
        $seed[] = [
            'name' => 'seller',
            'description' => 'this is a bussiness seller, and he has limited access to his clients',
        ];
        $seed[] = [
            'name' => 'ceo',
            'description' => 'this is the bussiness CEO/OWNER, and he has limited access to his entired bussines, includes reports from all clients, sellers, etc..',
        ];
        $seed[] = [
            'name' => 'unregistered',
            'description' => 'this is a public user',
        ];

        DB::table('user_roles')->insert($seed);
    }
}
