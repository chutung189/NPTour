<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->integer('userId', true);
            $table->string('username', 100);
            $table->string('password');
            $table->string('email', 150)->unique('email');
            $table->string('phoneNumber', 20)->nullable();
            $table->string('address')->nullable();
            $table->boolean('isActive')->nullable()->default(true);
            $table->string('status', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->string('avatar')->nullable();
            $table->string('activation_token')->nullable();
            $table->string('fullName', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
