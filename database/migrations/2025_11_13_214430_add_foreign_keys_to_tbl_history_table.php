<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_history', function (Blueprint $table) {
            $table->foreign(['tourId'], 'tbl_history_ibfk_2')->references(['tourId'])->on('tbl_tours')->onDelete('SET NULL');
            $table->foreign(['userId'], 'tbl_history_ibfk_1')->references(['userId'])->on('tbl_users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_history', function (Blueprint $table) {
            $table->dropForeign('tbl_history_ibfk_2');
            $table->dropForeign('tbl_history_ibfk_1');
        });
    }
}
