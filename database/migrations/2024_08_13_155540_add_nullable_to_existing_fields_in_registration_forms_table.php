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
        Schema::table('registration_forms', function (Blueprint $table) {
            $table->boolean('registered_to_participate_in_elections')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registration_forms', function (Blueprint $table) {
            $table->boolean('registered_to_participate_in_elections')->nullable(false)->change();
        });
    }
};