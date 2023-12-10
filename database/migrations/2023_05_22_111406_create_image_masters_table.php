<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('image_masters', function (Blueprint $table) {
            $table->id();
            $table->string('image_master_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->date('lang')->nullable();
            $table->date('lang_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
