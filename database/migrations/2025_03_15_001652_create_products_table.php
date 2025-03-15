<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Product name
            $table->text('description')->nullable(); // Optional description
            $table->decimal('price', 10, 2); // Price with 2 decimal places
            $table->timestamps(); // Created at & Updated at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products'); // Drops table if rollback is performed
    }
};

