<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('details')->nullable(); // ← GANTI 'description' MENJADI 'details'
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('image_path')->nullable(); // ← TAMBAHKAN ini juga
            $table->integer('stock')->default(0); // ← TAMBAHKAN ini juga
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};