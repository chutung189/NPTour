<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_images', function (Blueprint $table) {
            $table->foreign(['tourId'], 'tbl_images_ibfk_1')->references(['tourId'])->on('tbl_tours')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_images', function (Blueprint $table) {
            $table->dropForeign('tbl_images_ibfk_1');
        });
    }
}
