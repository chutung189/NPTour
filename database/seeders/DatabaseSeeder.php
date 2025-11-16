<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(TblAdminTableSeeder::class);
        $this->call(TblUsersTableSeeder::class);
        $this->call(TblToursTableSeeder::class);
        $this->call(TblPromotionsTableSeeder::class);
        $this->call(TblImagesTableSeeder::class);
        $this->call(TblTimelineTableSeeder::class);

        // 2. Bảng phụ thuộc Tours + Users
        $this->call(TblBookingTableSeeder::class);

        // 3. Bảng phụ thuộc Booking
        $this->call(TblCheckoutTableSeeder::class);
        $this->call(TblInvoiceTableSeeder::class);
        $this->call(TblHistoryTableSeeder::class);
        $this->call(TblChatTableSeeder::class);
        $this->call(TblReviewsTableSeeder::class);
        $this->call(TblContactTableSeeder::class);
    }
}
