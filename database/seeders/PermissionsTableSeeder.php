<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'database_access',
            ],
            [
                'id'    => 19,
                'title' => 'game_create',
            ],
            [
                'id'    => 20,
                'title' => 'game_edit',
            ],
            [
                'id'    => 21,
                'title' => 'game_show',
            ],
            [
                'id'    => 22,
                'title' => 'game_delete',
            ],
            [
                'id'    => 23,
                'title' => 'game_access',
            ],
            [
                'id'    => 24,
                'title' => 'platform_create',
            ],
            [
                'id'    => 25,
                'title' => 'platform_edit',
            ],
            [
                'id'    => 26,
                'title' => 'platform_show',
            ],
            [
                'id'    => 27,
                'title' => 'platform_delete',
            ],
            [
                'id'    => 28,
                'title' => 'platform_access',
            ],
            [
                'id'    => 29,
                'title' => 'company_create',
            ],
            [
                'id'    => 30,
                'title' => 'company_edit',
            ],
            [
                'id'    => 31,
                'title' => 'company_show',
            ],
            [
                'id'    => 32,
                'title' => 'company_delete',
            ],
            [
                'id'    => 33,
                'title' => 'company_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
