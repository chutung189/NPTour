<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblAdminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_admin')->delete();
        
        \DB::table('tbl_admin')->insert(array (
            0 => 
            array (
                'adminId' => 4,
                'username' => 'admin',
                'password' => 'e10adc3949ba59abbe56e057f20f883e',
                'email' => 'chutung@example.com',
                'role' => 'admin',
                'created_at' => '2025-11-13 20:51:56',
                'fullName' => 'Chu Tung',
                'address' => 'Hà Nội',
                'avatar' => 'admin/assets/images/user-profile/avt_admin.jpg',
            ),
        ));
        
        
    }
}