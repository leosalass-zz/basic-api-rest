<?php

use Illuminate\Database\Seeder;

class UserStatesTableSeeder extends Seeder
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
            'name' => 'inactive',
            'description' => 'registered, but not activated, this user needs to be activated by email confirmation',
        ];
        $seed[] = [
            'name' => 'active',
            'description' => 'email validated user',
        ];
        $seed[] = [
            'name' => 'banned',
            'description' => 'this is a banned user',
        ];

        DB::table('user_states')->insert($seed);
    }
}
