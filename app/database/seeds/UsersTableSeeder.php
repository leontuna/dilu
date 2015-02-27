<?php


class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([
           'name' => "Leonardo",
            'lastname1' => "Hidalgo",
            'lastname2' => "Sepulveda",
            'email' => 'leontuna@gmail.com',
            'password' => "123",
            'roles_id' => 1
        ]);
    }

}