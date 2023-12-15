<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    
    public function run()
    {
        $users = [
        //     [   
        //         'name' => 'user1',
        //         'email' => 'user1@user.com',
        //         'password' => bcrypt('gggggggg'), 
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'user_address' => 'malang',
        //         'user_phone_number' => '08123456789',
        //         'role_id' => '2',
        //     ], 
        //     [   
        //         'name' => 'owner1',
        //         'email' => 'owner1@user.com',
        //         'password' => bcrypt('gggggggg'), 
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'user_address' => 'Surabaya',
        //         'user_phone_number' => '08987654321',
        //         'role_id' => '3',
        //     ], 
        //     [
                'name' => 'admin',
                'email' => 'admin@user.com',
                'password' => bcrypt('gggggggg'), 
                'created_at' => now(),
                'updated_at' => now(),
                'user_address' => 'Jakarta',
                'user_phone_number' => '081111111111',
                'role_id' => '1',    
        //     ],
        //     [   
        //         'name' => 'owner2',
        //         'email' => 'owner2@user.com',
        //         'password' => bcrypt('gggggggg'), 
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'user_address' => 'Kediri',
        //         'user_phone_number' => '09876890',
        //         'role_id' => '3 ',
        //     ]
        
        ]; 
        
        DB::table('users')->insert($users); 
    }
}
