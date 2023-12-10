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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('category_id')->nullable();
            $table->integer('price_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('shipping_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('snap_token', 36)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('invoice_code')->nullable();
            $table->integer('prod_amount')->nullable();
            $table->integer('total_price')->nullable();
            $table->integer('gross_total_price')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
