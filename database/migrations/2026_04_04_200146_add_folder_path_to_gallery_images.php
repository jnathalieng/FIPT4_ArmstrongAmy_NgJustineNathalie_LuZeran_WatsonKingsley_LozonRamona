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
    Schema::table('gallery_images', function (Blueprint $table) {
        $table->string('folder_path')->nullable();  // Add this column
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('gallery_images', function (Blueprint $table) {
        $table->dropColumn('folder_path');
    });
}
};
