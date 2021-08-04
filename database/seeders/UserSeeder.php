<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose Ivan Daza Martinez',
            'email' => 'jesulim@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::factory(9)->create();
    }
}
