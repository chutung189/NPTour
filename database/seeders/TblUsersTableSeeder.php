<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_users')->delete();
        
        \DB::table('tbl_users')->insert(array (
            0 => 
            array (
                'userId' => 1,
                'username' => 'chutung1',
                'password' => 'e10adc3949ba59abbe56e057f20f883e',
                'email' => '1@gmail.com',
                'phoneNumber' => NULL,
                'address' => NULL,
                'isActive' => 1,
                'status' => NULL,
                'created_at' => '2025-11-13 20:29:18',
                'updated_at' => '2025-11-13 20:32:34',
                'avatar' => '1763040754.jpg',
                'activation_token' => 'p2AHPDILtdWV8zqVCtYKTkKMBZV18f6WjqfzYVHZYBUWa2cScij2ar6haLcy',
                'fullName' => NULL,
            ),
        ));
        
        
    }
}