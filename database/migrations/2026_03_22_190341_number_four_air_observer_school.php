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
    Schema::create('number_four_air_observers_school', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->text('rank');
        $table->string('name', 250);
        $table->string('picture', 250);
        $table->text('info');
        $table->string('unit', 250);
        $table->text('date');
        $table->text('aircraft');
        $table->text('incident');
        $table->text('location');
        $table->text('details');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
