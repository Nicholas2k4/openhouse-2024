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
        Schema::create('detail_registrations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nrp', 9);
            $table->uuid('ukm_id');
            $table->string('payment')->nullable();
            $table->string('code');
            $table->string('drive_url')->nullable();
            $table->tinyInteger('file_validated')->comment("0: No, 1: Yes, 2: Reject");
            $table->tinyInteger('payment_validated')->comment("0: No, 1: Yes");
            $table->timestamps();


            $table->foreign('ukm_id')->references('id')->on('ukms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_registrations');
    }
};
