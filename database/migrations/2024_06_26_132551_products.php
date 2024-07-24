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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin')->constrained('users')->onDelete('cascade');
            $table->string('username');
            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
            $table->string('name_product');
            $table->string('name_localbrand');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->string('image')->default('noimage.png');
            $table->enum('category_people', ['man', 'women']);
            $table->enum('category_shoes', ['sneakers', 'sports', 'running']);            
            $table->string('slug')->unique();
            $table->string('link_shoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
