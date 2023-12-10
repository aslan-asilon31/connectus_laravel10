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
        Schema::create('brand_masters', function (Blueprint $table) {
            $table->id();
            $table->string('brand_id');
            $table->string('product_id');
            $table->string('status_id');
            $table->string('image_id');
            $table->string('name');
            $table->string('lang');
            $table->string('lang_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_masters');
    }
};
