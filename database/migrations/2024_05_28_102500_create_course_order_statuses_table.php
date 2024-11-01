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
        Schema::create('course_order_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->dateTime('date');
            $table->unsignedBigInteger('course_order_id')->nullable();
            $table->foreign('course_order_id')->references('id')->on('course_orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_order_statuses');
    }
};
