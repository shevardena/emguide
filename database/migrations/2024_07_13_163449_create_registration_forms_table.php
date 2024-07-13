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
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_code');
            $table->string('email');
            $table->string('phone');
            $table->boolean('consular_registration');
            $table->boolean('voting_intention');
            $table->text('voting_reason')->nullable();
            $table->boolean('registration_help');
            $table->boolean('agreement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_forms');
    }
};
