<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'name' => 'User',
                'slug' => 'user'
            ]
        ];
        $newRole = Role::insert($roles);
    }
}
