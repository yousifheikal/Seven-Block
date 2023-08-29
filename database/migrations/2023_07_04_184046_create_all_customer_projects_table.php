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
        Schema::create('all_customer_projects', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('bedroom')->nullable();
            $table->string('lounge')->nullable();
            $table->string('saloon')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('external')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_customer_projects');
    }
};
