<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblCheckoutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_checkout')->delete();
        
        \DB::table('tbl_checkout')->insert(array (
            0 => 
            array (
                'checkoutId' => 1,
                'bookingId' => 1,
                'paymentMethod' => 'office-payment',
                'amount' => 15000000.0,
                'paymentDate' => NULL,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
        ));
        
        
    }
}