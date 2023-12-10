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
        Schema::create('stock_masters', function (Blueprint $table) {
            $table->id();
            $table->string('stock_master_id');
            $table->string('user_id');
            $table->string('status_id');
            $table->string('amount');
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
        Schema::dropIfExists('stock_masters');
    }
};
