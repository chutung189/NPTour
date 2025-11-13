<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->integer('adminId', true);
            $table->string('username', 100);
            $table->string('password');
            $table->string('email', 150)->nullable();
            $table->string('role', 50)->nullable()->default('admin');
            $table->timestamp('created_at')->useCurrent();
            $table->string('fullName', 100)->nullable();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable()->default('admin/assets/images/user-profile/avt_admin.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin');
    }
}
