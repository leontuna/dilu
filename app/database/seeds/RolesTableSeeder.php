<?php


class RolesTableSeeder extends Seeder {

    public function run()
    {
        Role::create([
            'name' => "Admin"
        ]);
        Role::create([
            'name' => "Default"
        ]);
    }

}