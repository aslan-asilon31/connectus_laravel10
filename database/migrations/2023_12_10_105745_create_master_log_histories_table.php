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
        Schema::create('log_history_masters', function (Blueprint $table) {
            $table->id();
            $table->string('module')->default('ModuleName@id=OldField:OldValue#NewField:NewValue\UserId/');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_log_histories');
    }
};
