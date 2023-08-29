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
        Schema::create('time_entries', function (Blueprint $table) {
            $table->id();
            $table->string('project')->nullable();
            $table->string('task')->nullable();
            $table->string('cost_type')->nullable();
            $table->string('code_of_account')->nullable();
            $table->text('Activity_location')->nullable();
            $table->string('type')->nullable();
            $table->string('days')->nullable();
            $table->string('total')->nullable();
            $table->string('shift')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_entries');
    }
};
