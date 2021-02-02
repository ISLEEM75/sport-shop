<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'This is Admin',

        ]);
        DB::table('roles')->insert([
            'name' => 'Editor',
            'description' => 'This is Editor',

        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'description' => 'This is User',

        ]);

    }
}
