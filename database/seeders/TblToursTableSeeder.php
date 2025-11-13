<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblToursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_tours')->delete();
        
        \DB::table('tbl_tours')->insert(array (
            0 => 
            array (
                'tourId' => 1,
                'title' => 'Hạ Long Bay',
                'description' => '<p>Kh&aacute;m ph&aacute; kỳ quan thi&ecirc;n nhi&ecirc;n thế giới &ndash; Vịnh Hạ Long. Du kh&aacute;ch sẽ được du ngoạn tr&ecirc;n du thuyền, thăm động Thi&ecirc;n Cung, h&ograve;n G&agrave; Chọi, l&agrave;ng ch&agrave;i Cửa Vạn v&agrave; tắm biển Tuần Ch&acirc;u. Trải nghiệm ẩm thực hải sản tươi ngon, ngắm ho&agrave;ng h&ocirc;n tr&ecirc;n vịnh v&agrave; nghỉ đ&ecirc;m tr&ecirc;n du thuyền sang trọng.</p>',
                'priceAdult' => 15000000.0,
                'priceChild' => 3000000.0,
                'duration' => NULL,
                'destination' => 'Hạ Long',
                'domain' => 'b',
                'quantity' => 15,
                'availability' => 0,
                'startDate' => '2025-11-14',
                'endDate' => '2025-11-16',
                'created_at' => '2025-11-13 21:13:38',
                'updated_at' => '2025-11-13 21:13:38',
                'time' => '2 ngày 1 đêm',
            ),
            1 => 
            array (
                'tourId' => 2,
                'title' => 'Hạ Long Bay',
                'description' => '<p>Tour Hạ Long l&agrave; h&agrave;nh tr&igrave;nh l&yacute; tưởng d&agrave;nh cho du kh&aacute;ch muốn kh&aacute;m ph&aacute; vẻ đẹp kỳ quan thi&ecirc;n nhi&ecirc;n thế giới &ndash; <strong>Vịnh Hạ Long</strong>.<br />
Chuyến đi mang đến trải nghiệm nghỉ dưỡng tr&ecirc;n <strong>du thuyền sang trọng</strong>, tham quan c&aacute;c <strong>hang động huyền ảo</strong>, <strong>ch&egrave;o kayak giữa l&agrave;n nước xanh ngọc</strong>, v&agrave; <strong>tắm biển thư gi&atilde;n</strong> giữa thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ.<br />
Du kh&aacute;ch sẽ được thưởng thức <strong>ẩm thực hải sản tươi ngon</strong>, ngắm <strong>ho&agrave;ng h&ocirc;n v&agrave; b&igrave;nh minh tr&ecirc;n vịnh</strong>, c&ugrave;ng nhiều hoạt động th&uacute; vị như <strong>c&acirc;u mực đ&ecirc;m</strong>, <strong>lớp học Th&aacute;i Cực Quyền buổi s&aacute;ng</strong>.<br />
Đ&acirc;y l&agrave; lựa chọn ho&agrave;n hảo để tận hưởng kh&ocirc;ng kh&iacute; biển trong l&agrave;nh, nghỉ ngơi v&agrave; chi&ecirc;m ngưỡng một trong những <strong>kỳ quan thi&ecirc;n nhi&ecirc;n đẹp nhất Việt Nam</strong>.</p>',
                'priceAdult' => 15000000.0,
                'priceChild' => 3000000.0,
                'duration' => NULL,
                'destination' => 'Hạ Long',
                'domain' => 'b',
                'quantity' => 14,
                'availability' => 1,
                'startDate' => '2025-11-14',
                'endDate' => '2025-11-16',
                'created_at' => '2025-11-13 21:22:36',
                'updated_at' => '2025-11-13 21:27:57',
                'time' => '2 ngày 1 đêm',
            ),
        ));
        
        
    }
}