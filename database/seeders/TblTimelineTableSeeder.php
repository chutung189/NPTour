<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblTimelineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_timeline')->delete();
        
        \DB::table('tbl_timeline')->insert(array (
            0 => 
            array (
                'timeLineId' => 1,
                'tourId' => 2,
                'title' => 'Ngày 1: Hà Nội – Hạ Long – Du thuyền trên Vịnh',
                'description' => '<p>Buổi s&aacute;ng, xe v&agrave; hướng dẫn vi&ecirc;n đ&oacute;n qu&yacute; kh&aacute;ch tại <strong>H&agrave; Nội</strong>, khởi h&agrave;nh đi <strong>Hạ Long</strong> theo tuyến cao tốc hiện đại. Tr&ecirc;n đường đi, qu&yacute; kh&aacute;ch c&oacute; thể ngắm nh&igrave;n khung cảnh thanh b&igrave;nh của đồng bằng Bắc Bộ với những c&aacute;nh đồng l&uacute;a, l&agrave;ng qu&ecirc; y&ecirc;n ả.</p>

<p>Đến <strong>Cảng Tuần Ch&acirc;u</strong>, qu&yacute; kh&aacute;ch l&agrave;m thủ tục l&ecirc;n <strong>du thuyền sang trọng</strong> để bắt đầu h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute; <strong>Vịnh Hạ Long &ndash; Di sản thi&ecirc;n nhi&ecirc;n thế giới</strong>.<br />
Trong khi du thuyền khởi h&agrave;nh, qu&yacute; kh&aacute;ch thưởng thức <strong>bữa trưa hải sản tươi ngon</strong> giữa khung cảnh h&ugrave;ng vĩ của h&agrave;ng ng&agrave;n đảo đ&aacute; v&ocirc;i kỳ th&uacute; như: <strong>H&ograve;n Ch&oacute; Đ&aacute;, H&ograve;n Đỉnh Hương, H&ograve;n G&agrave; Chọi&hellip;</strong></p>

<p>Buổi chiều, du thuyền đưa qu&yacute; kh&aacute;ch tham quan <strong>hang động nổi tiếng</strong> với những khối thạch nhũ lung linh, huyền ảo. Sau đ&oacute;, qu&yacute; kh&aacute;ch c&oacute; thể <strong>tắm nắng hoặc thư gi&atilde;n tr&ecirc;n boong t&agrave;u</strong>, ngắm ho&agrave;ng h&ocirc;n bu&ocirc;ng xuống mặt biển.</p>

<p>Buổi tối, thưởng thức <strong>bữa tối l&atilde;ng mạn tr&ecirc;n du thuyền</strong>, tham gia <strong>c&acirc;u mực đ&ecirc;m</strong> hoặc <strong>nghe nhạc, giao lưu c&ugrave;ng du kh&aacute;ch quốc tế</strong>. Nghỉ đ&ecirc;m tr&ecirc;n du thuyền giữa kh&ocirc;ng gian y&ecirc;n b&igrave;nh của Vịnh Hạ Long.</p>',
                'created_at' => '2025-11-13 21:23:22',
                'updated_at' => '2025-11-13 21:23:22',
            ),
            1 => 
            array (
                'timeLineId' => 2,
                'tourId' => 2,
                'title' => 'Ngày 2: Khám phá Vịnh – Chèo kayak – Tắm biển',
                'description' => '<p>Buổi s&aacute;ng, qu&yacute; kh&aacute;ch dậy sớm <strong>ngắm b&igrave;nh minh tr&ecirc;n vịnh</strong>, tham gia <strong>lớp học Th&aacute;i Cực Quyền</strong> nhẹ nh&agrave;ng, đ&oacute;n ng&agrave;y mới trong kh&ocirc;ng kh&iacute; trong l&agrave;nh của biển cả.</p>

<p>Sau bữa s&aacute;ng, du thuyền đưa qu&yacute; kh&aacute;ch tới khu vực <strong>l&agrave;ng ch&agrave;i nổi</strong> hoặc <strong>v&ugrave;ng vịnh y&ecirc;n tĩnh</strong>, nơi qu&yacute; kh&aacute;ch c&oacute; thể <strong>tự m&igrave;nh ch&egrave;o kayak</strong> len lỏi qua c&aacute;c hang nước v&agrave; h&ograve;n đảo nhỏ &ndash; một trải nghiệm th&uacute; vị để cảm nhận vẻ đẹp gần gũi của thi&ecirc;n nhi&ecirc;n Hạ Long.</p>

<p>Tiếp theo, qu&yacute; kh&aacute;ch <strong>tắm biển</strong>, <strong>thư gi&atilde;n v&agrave; chụp ảnh lưu niệm</strong> tr&ecirc;n b&atilde;i c&aacute;t trắng mịn. Sau đ&oacute;, quay lại du thuyền, thưởng thức <strong>bữa trưa sớm</strong>, l&agrave;m thủ tục trả ph&ograve;ng.</p>

<p>Buổi trưa, t&agrave;u cập bến, xe đ&oacute;n đo&agrave;n trở về <strong>H&agrave; Nội</strong>, kết th&uacute;c chuyến đi với nhiều <strong>kỷ niệm kh&oacute; qu&ecirc;n về Vịnh Hạ Long &ndash; kỳ quan của thế giới</strong>.</p>',
                'created_at' => '2025-11-13 21:23:22',
                'updated_at' => '2025-11-13 21:23:22',
            ),
        ));
        
        
    }
}