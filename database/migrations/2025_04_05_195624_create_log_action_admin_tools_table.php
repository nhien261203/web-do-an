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
        Schema::create('log_action_admin_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin');  // Khóa ngoại đến bảng users
            $table->string('action');
            $table->text('data')->nullable();
            $table->timestamp('time')->useCurrent();  // Thời gian hành động
            $table->string('method')->nullable();
            $table->string('route')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
    
            $table->foreign('admin')->references('id')->on('users')->onDelete('cascade');  // Thiết lập khóa ngoại
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_action_admin_tools');
    }
};
