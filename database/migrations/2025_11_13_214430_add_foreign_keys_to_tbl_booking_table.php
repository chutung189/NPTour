<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_booking', function (Blueprint $table) {
            $table->foreign(['userId'], 'tbl_booking_ibfk_2')->references(['userId'])->on('tbl_users')->onDelete('CASCADE');
            $table->foreign(['tourId'], 'tbl_booking_ibfk_1')->references(['tourId'])->on('tbl_tours')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_booking', function (Blueprint $table) {
            $table->dropForeign('tbl_booking_ibfk_2');
            $table->dropForeign('tbl_booking_ibfk_1');
        });
    }
}
