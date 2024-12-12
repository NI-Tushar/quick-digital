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
        Schema::create('quick_shop_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('order_code');
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('qty')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('total')->nullable();
            $table->enum('delivery_status', ['Pending', 'Confirmed', 'Picked Up', 'On The Way', 'Delivered'])->default('Pending');
            $table->enum('payment_status', ['Un-paid', 'Paid'])->default('Un-paid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quick_shop_orders');
    }
};
