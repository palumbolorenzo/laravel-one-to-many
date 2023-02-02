<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'asdf',
                'email'     => 'asdf@gmail.com',
                'password'  => Hash::make('asdf')
            ],
            [
                'name'      => 'qwer',
                'email'     => 'qwer@gmail.com',
                'password'  => Hash::make('qwer')
            ],
            [
                'name'      => 'Lorenzo',
                'email'     => 'palumbolorenzo97@gmail.com',
                'password'  => Hash::make('12345678')
            ],
        ];

        foreach ($users as $user) {
            // Metodo 1
            // $objUser = new User;
            // $objUser->name = $user['name'];
            // $objUser->email = $user['email'];
            // $objUser->password = $user['password'];
            // $objUser->save();

            // Metodo 2
            // $objUser = new User;
            // $objUser->fill($user);
            // $objUser->save();

            // Metodo 3
            User::create($user);
        }
    }
}
