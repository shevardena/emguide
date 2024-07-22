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
            $table->renameColumn('id_code', 'personal_id');
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('citizenship')->default('საქართველო');
            $table->date('date_of_entry')->nullable();
            $table->string('purpose_of_visit');
            $table->string('address');
            $table->string('postal_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registration_forms', function (Blueprint $table) {
            $table->renameColumn('personal_id', 'id_code');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('gender');
            $table->dropColumn('citizenship');
            $table->dropColumn('date_of_entry');
            $table->dropColumn('purpose_of_visit');
            $table->dropColumn('address');
            $table->dropColumn('postal_code');
        });
    }
};
