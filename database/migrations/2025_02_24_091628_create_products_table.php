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
            $table->string('name'); // Product name
            $table->string('slug')->unique()->nullable(); // SEO-friendly URL
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 10, 2); // Price
            $table->decimal('discount_price', 10, 2)->nullable(); // Discounted price
            $table->integer('stock')->default(0); // Available stock count
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Proper foreign key
            $table->string('brand')->nullable(); // Brand name (optional)
            $table->decimal('rating', 2, 1)->default(0); // Rating (e.g., 4.5)
            $table->string('thumbnail')->nullable(); // Main product image
            $table->string('sku')->unique()->nullable(); // Stock Keeping Unit
            $table->boolean('status')->default(1); // Active or Inactive product
            $table->boolean('featured')->default(0); // Featured product
            $table->boolean('is_trending')->default(0); // Trending product
            $table->boolean('is_new')->default(0); // New arrival
            // $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // User/admin who added it
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('SET NULL');
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
