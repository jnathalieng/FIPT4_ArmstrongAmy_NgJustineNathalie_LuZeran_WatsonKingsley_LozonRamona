<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('comm', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('name', 250);
        $table->string('picture', 250)->nullable();
        $table->string('service_number', 150);
        $table->text('rank');
        $table->string('corps', 250);
        $table->string('unit', 250);
        $table->integer('age');
        $table->string('birth', 250);
        $table->text('death');
        $table->string('enlist', 300);
        $table->text('info');
        $table->text('grave');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comm');
    }
};
