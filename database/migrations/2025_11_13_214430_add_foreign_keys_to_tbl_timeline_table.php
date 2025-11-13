<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_timeline', function (Blueprint $table) {
            $table->foreign(['tourId'], 'fk_tour_timeline')->references(['tourId'])->on('tbl_tours')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_timeline', function (Blueprint $table) {
            $table->dropForeign('fk_tour_timeline');
        });
    }
}
