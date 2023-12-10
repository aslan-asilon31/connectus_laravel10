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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image_master_id')->nullable();
            $table->string('status_master_id')->nullable();
            $table->string('category_master_id')->nullable();
            $table->integer('price_master_id')->nullable();
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('is_sold')->nullable();
            $table->string('size')->nullable();
            $table->integer('rating')->nullable();
            $table->text('wishlist')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

                // $table->string('name');
            // $table->double('price');
            // $table->text('description');
            // $table->string('image');
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
