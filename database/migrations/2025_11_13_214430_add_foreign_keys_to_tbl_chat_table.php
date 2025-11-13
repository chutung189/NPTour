<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_chat', function (Blueprint $table) {
            $table->foreign(['adminId'], 'tbl_chat_ibfk_2')->references(['adminId'])->on('tbl_admin')->onDelete('SET NULL');
            $table->foreign(['userId'], 'tbl_chat_ibfk_1')->references(['userId'])->on('tbl_users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_chat', function (Blueprint $table) {
            $table->dropForeign('tbl_chat_ibfk_2');
            $table->dropForeign('tbl_chat_ibfk_1');
        });
    }
}
