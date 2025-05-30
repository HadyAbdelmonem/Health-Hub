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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('store_id')->constrained('stores')->cascadeOnDelete();
            $table->string('payment_method');
            $table->string('number')->unique();
            $table->enum('status' , ['pending' , 'processing' , 'delivering','completed' , 'refunded'])->default('pending');
            $table->enum('payment_status' , ['pending' , 'paid','failed'])->default('pending');
            $table->float('shipping')->default(0);
            $table->float('tax')->default(0);
            $table->float('discount')->default(0);
            $table->float('total')->default(0);
            $table->string('tracking_number')->nullable();
            $table->string('carrier')->nullable();
            $table->timestamp('processing_at')->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
