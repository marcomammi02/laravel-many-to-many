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
                'name'=> 'Antonino Cannavacciuolo',
                'email' => 'antonino@cannavacciuolo.cucina',
                'password' => Hash::make('antonino')
            ],
            [
                'name'=> 'Tony Stark',
                'email' => 'tony@stark.iron',
                'password' => Hash::make('tonystark')
            ],
            [
                'name'=> 'Topo Lino',
                'email' => 'topo@lino.pippo',
                'password' => Hash::make('topolino')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
