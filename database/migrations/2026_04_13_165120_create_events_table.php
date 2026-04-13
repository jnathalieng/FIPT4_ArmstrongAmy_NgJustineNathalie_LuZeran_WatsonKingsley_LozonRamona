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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('events_title');
            $table->text('events_description');

            $table->dateTime('events_start_datetime');
            $table->dateTime('events_end_datetime')->nullable();
            $table->string('events_timezone')->nullable();

            $table->string('events_category');
            $table->string('events_status');

            $table->string('events_image_1')->nullable();
            $table->string('events_image_alt_1')->nullable();
            $table->string('events_image_2')->nullable();
            $table->string('events_image_alt_2')->nullable();
            $table->string('events_image_3')->nullable();
            $table->string('events_image_alt_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
