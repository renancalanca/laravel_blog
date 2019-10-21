<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Teste Admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'is_admin' => true
        ]);
    }
}
