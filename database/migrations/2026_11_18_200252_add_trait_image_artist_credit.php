<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('features', function (Blueprint $table) {
            $table->string('reference_url', 200)->nullable();
            $table->string('artist_id')->nullable();
            $table->string('artist_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('features', function (Blueprint $table) {
            $table->dropColumn('reference_url');
            $table->dropColumn('artist_id');
            $table->dropColumn('artist_url');
        });
    }
};
