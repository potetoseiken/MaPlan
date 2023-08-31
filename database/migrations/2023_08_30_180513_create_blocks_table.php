<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('day_id');
            $table->foreignId('spot_id')->nullable();
            $table->foreignId('category_id');
            $table->foreignId('trans_method_id')->nullable();
            $table->foreignId('icon_id');
            $table->dateTime('start_at')->nullable();
            $table->dateTime('finish_at')->nullable();
            $table->integer('budget')->nullable();
            $table->time('trans_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
};
