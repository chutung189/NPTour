<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblBookingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_booking')->delete();
        
        \DB::table('tbl_booking')->insert(array (
            0 => 
            array (
                'bookingId' => 1,
                'tourId' => 2,
                'userId' => 1,
                'address' => 'Thanh Tri',
                'fullName' => 'Pham Viet Phuong',
                'email' => '22010465@st.phenikaa-uni.edu.vn',
                'phoneNumber' => '0912345678',
                'numAdults' => 1,
                'numChildren' => 0,
                'totalPrice' => 15000000.0,
                'bookingDate' => '2025-11-13 21:27:56',
                'bookingStatus' => 'pending',
            ),
        ));
        
        
    }
}