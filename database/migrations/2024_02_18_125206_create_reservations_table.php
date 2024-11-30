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
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
    
                $table->unsignedBigInteger('bike_id');
                $table->foreign('bike_id')->references('id')->on('bikes');
    
                $table->time('start_hour');
                $table->time('end_hour');
                $table->integer('days');
                $table->decimal('price_per_hour', 10, 2);
                $table->decimal('total_price');
                $table->string('status')->default('active');
                $table->string('payment_method');
                $table->string('payment_status')->default('pending');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
