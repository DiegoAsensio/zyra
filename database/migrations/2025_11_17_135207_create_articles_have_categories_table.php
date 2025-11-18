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
        Schema::create('articles_have_categories', function (Blueprint $table) {
            $table->foreignId('article_fk')->constrained(table: 'articles', column:'id');
            $table->foreignId('category_fk')->constrained(table: 'categories');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles_have_categories');
    }
};
