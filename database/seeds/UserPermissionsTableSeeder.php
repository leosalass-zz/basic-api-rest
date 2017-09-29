<?php

use Illuminate\Database\Seeder;

class UserPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = [];

        /*
         * administrator permissions
         */
        $seed[] = [
            'name' => 'access.all',
            'description' => 'grant full interface access',
        ];
        $seed[] = [
            'name' => 'crud.all',
            'description' => 'grant access to all crud operations',
        ];

        /*
         * access permissions
         */
        $seed[] = [
            'name' => 'access.backend',
            'description' => 'grant backend interface access',
        ];
        $seed[] = [
            'name' => 'access.users',
            'description' => 'grant backend users interface access',
        ];
        $seed[] = [
            'name' => 'access.roles',
            'description' => 'grant backend roles interface access',
        ];
        $seed[] = [
            'name' => 'access.permissions',
            'description' => 'grant backend permissions interface access',
        ];

        /*
         * crud permissions
         */
        $seed[] = [
            'name' => 'user_roles.create',
            'description' => 'grant create access to user_roles',
        ];
        $seed[] = [
            'name' => 'user_roles.read',
            'description' => 'grant read access to user_roles',
        ];
        $seed[] = [
            'name' => 'user_roles.update',
            'description' => 'grant update access to user_roles',
        ];
        $seed[] = [
            'name' => 'user_roles.delete',
            'description' => 'grant delete access to user_roles',
        ];

        $seed[] = [
            'name' => 'user_has_user_roles.create',
            'description' => 'grant create access to user_has_user_roles',
        ];
        $seed[] = [
            'name' => 'user_has_user_roles.read',
            'description' => 'grant read access to user_has_user_roles',
        ];
        $seed[] = [
            'name' => 'user_has_user_roles.update',
            'description' => 'grant update access to user_has_user_roles',
        ];
        $seed[] = [
            'name' => 'user_has_user_roles.delete',
            'description' => 'grant delete access to user_has_user_roles',
        ];

        $seed[] = [
            'name' => 'user_permissions.create',
            'description' => 'grant create access to user_permissions',
        ];
        $seed[] = [
            'name' => 'user_permissions.read',
            'description' => 'grant read access to user_permissions',
        ];
        $seed[] = [
            'name' => 'user_permissions.update',
            'description' => 'grant update access to user_permissions',
        ];
        $seed[] = [
            'name' => 'user_permissions.delete',
            'description' => 'grant delete access to user_permissions',
        ];

        $seed[] = [
            'name' => 'user_has_user_permissions.create',
            'description' => 'grant create access to user_has_user_permissions',
        ];
        $seed[] = [
            'name' => 'user_has_user_permissions.read',
            'description' => 'grant read access to user_has_user_permissions',
        ];
        $seed[] = [
            'name' => 'user_has_user_permissions.update',
            'description' => 'grant update access to user_has_user_permissions',
        ];
        $seed[] = [
            'name' => 'user_has_user_permissions.delete',
            'description' => 'grant delete access to user_has_user_permissions',
        ];

        $seed[] = [
            'name' => 'user_roles_has_user_permissions.create',
            'description' => 'grant create access to user_roles_has_user_permissions',
        ];
        $seed[] = [
            'name' => 'user_roles_has_user_permissions.read',
            'description' => 'grant read access to user_roles_has_user_permissions',
        ];
        $seed[] = [
            'name' => 'user_roles_has_user_permissions.update',
            'description' => 'grant update access to user_roles_has_user_permissions',
        ];
        $seed[] = [
            'name' => 'user_roles_has_user_permissions.delete',
            'description' => 'grant delete access to user_roles_has_user_permissions',
        ];

        $seed[] = [
            'name' => 'users.create',
            'description' => 'grant access to users creation',
        ];
        $seed[] = [
            'name' => 'users.read',
            'description' => 'grant read access to current user to the users',
        ];
        $seed[] = [
            'name' => 'users.read.main',
            'description' => 'grant read access to current user to his users',
        ];
        $seed[] = [
            'name' => 'users.update',
            'description' => 'grant update access to current user to the users',
        ];
        $seed[] = [
            'name' => 'users.update.mine',
            'description' => 'grant update access to current user to his users',
        ];
        $seed[] = [
            'name' => 'users.ban',
            'description' => 'ban user',
        ];
        $seed[] = [
            'name' => 'users.delete',
            'description' => 'delete users',
        ];

        DB::table('user_permissions')->insert($seed);
    }
}
