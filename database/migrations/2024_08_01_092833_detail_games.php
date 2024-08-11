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
        Schema::create('detail_games', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nrp', 9);
            $table->uuid('ukm_id');
            $table->char('letter');
            $table->integer('letter_index');
            $table->timestamps();

            $table->foreign('nrp')->references('nrp')->on('users')->onDelete('cascade');
            $table->foreign('ukm_id')->references('id')->on('ukms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_games');
    }
};
