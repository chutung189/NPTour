<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tours', function (Blueprint $table) {
            $table->integer('tourId', true);
            $table->string('title');
            $table->text('description')->nullable();
            $table->double('priceAdult');
            $table->double('priceChild')->nullable()->default(0);
            $table->string('duration', 100)->nullable();
            $table->string('destination')->nullable();
            $table->enum('domain', ['b', 't', 'n']);
            $table->integer('quantity')->nullable()->default(0);
            $table->boolean('availability')->nullable()->default(true);
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->string('time', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tours');
    }
}
