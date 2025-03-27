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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 150);
            $table->decimal('balance', 15, 2);
            $table->timestamp('opened_at');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('type_account_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
