<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('train_id');
            $table->string('departure_station');
            $table->string('arrive_station');
            $table->time('departure_hour');
            $table->time('arrive_hour');
            $table->date('departure_date');
            $table->date('arrive_date');
            $table->tinyInteger('carriages_num')->default(1);;
            $table->boolean('in_time')->default(true);;
            $table->boolean('deleted')->default(false);;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
