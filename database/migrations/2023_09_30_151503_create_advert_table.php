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
        Schema::create('advert', function (Blueprint $table) {
            $table->id();
            $table->string('advert_category');
            $table->string('advert_type');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('status');
            $table->string('description');
            $table->string('cost_value');
            $table->string('number_of');
            $table->string('owner');
            $table->string('target');
            $table->foreignId('client_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advert');
    }
};
