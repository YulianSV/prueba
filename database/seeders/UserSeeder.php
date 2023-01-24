<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
       $user = User::create([
       	'name' => 'administrator',
       	'email' => 'administrator@gmail.com',
       	'password' => bcrypt('bcf_5h')
       ]);

        $user->assignRole('administrator');
       
       $user = User::create([
       	'name' => 'customer',
       	'email' => 'customer@gmail.com',
       	'password' => bcrypt('bcf_4h')
       ]);

        $user->assignRole('customer');

    }
}
