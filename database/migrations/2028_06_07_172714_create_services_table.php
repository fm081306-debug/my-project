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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
        
            $table->string('name'); // اسم الخدمة

            $table->text('description')->nullable(); // وصف الخدمة

        $table->foreignId('sector_id')->constrained();
$table->foreignId('category_id')->constrained();

            $table->boolean('status')->default(1); // فعال أو لا

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
