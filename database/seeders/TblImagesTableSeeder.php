<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_images')->delete();
        
        \DB::table('tbl_images')->insert(array (
            0 => 
            array (
                'imageId' => 1,
                'tourId' => 1,
                'imageURL' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-2_1732938917_1763043309.jpg',
                'description' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-2_1732938917',
                'uploadDate' => '2025-11-13 21:15:10',
            ),
            1 => 
            array (
                'imageId' => 2,
                'tourId' => 1,
                'imageURL' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-3_1732938918_1763043310.jpg',
                'description' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-3_1732938918',
                'uploadDate' => '2025-11-13 21:15:10',
            ),
            2 => 
            array (
                'imageId' => 3,
                'tourId' => 1,
                'imageURL' => 'vinh-ha-long-quang-ninh_1735834627_1763043310.jpg',
                'description' => 'vinh-ha-long-quang-ninh_1735834627',
                'uploadDate' => '2025-11-13 21:15:10',
            ),
            3 => 
            array (
                'imageId' => 4,
                'tourId' => 1,
                'imageURL' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-6_1732938918_1763043310.jpg',
                'description' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-6_1732938918',
                'uploadDate' => '2025-11-13 21:15:10',
            ),
            4 => 
            array (
                'imageId' => 5,
                'tourId' => 1,
                'imageURL' => 'vinh-ha-long_1732896698_1763043311.png',
                'description' => 'vinh-ha-long_1732896698',
                'uploadDate' => '2025-11-13 21:15:11',
            ),
            5 => 
            array (
                'imageId' => 6,
                'tourId' => 2,
                'imageURL' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-2_1732938917_1763043309_1763043780.jpg',
                'description' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-2_1732938917_1763043309',
                'uploadDate' => '2025-11-13 21:23:00',
            ),
            6 => 
            array (
                'imageId' => 7,
                'tourId' => 2,
                'imageURL' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-3_1732938918_1763043780.jpg',
                'description' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-3_1732938918',
                'uploadDate' => '2025-11-13 21:23:00',
            ),
            7 => 
            array (
                'imageId' => 8,
                'tourId' => 2,
                'imageURL' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-6_1732938918_1763043780.jpg',
                'description' => 'tour-du-lich-ha-noi-sapa-ha-long-ninh-binh-5n4d-6_1732938918',
                'uploadDate' => '2025-11-13 21:23:00',
            ),
            8 => 
            array (
                'imageId' => 9,
                'tourId' => 2,
                'imageURL' => 'vinh-ha-long-quang-ninh_1735834627_1763043310_1763043780.jpg',
                'description' => 'vinh-ha-long-quang-ninh_1735834627_1763043310',
                'uploadDate' => '2025-11-13 21:23:00',
            ),
            9 => 
            array (
                'imageId' => 10,
                'tourId' => 2,
                'imageURL' => 'vinh-ha-long_1732896698_1763043781.png',
                'description' => 'vinh-ha-long_1732896698',
                'uploadDate' => '2025-11-13 21:23:01',
            ),
        ));
        
        
    }
}