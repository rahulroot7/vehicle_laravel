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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('agmt_no')->nullable();
            $table->string('app_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('bkt')->nullable();
            $table->string('pos')->nullable();
            $table->string('tos')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('model')->nullable();
            $table->string('product')->nullable();
            $table->string('file_name')->nullable();
            $table->string('branch')->nullable();
            $table->string('customer_mobile_no')->nullable();
            $table->enum('status', ['0', '1'])->default('0')->comment('0=>in-active,1=>active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
