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
        Schema::create('code_distributions', function (Blueprint $table) {
            $table->foreignId('code_id')->constrained('product_codes');
            $table->foreignId('country_id')->constrained('countries');
            $table->primary(['code_id', 'country_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('code_distributions');
    }
};
