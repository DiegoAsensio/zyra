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
        Schema::create('memberships', function (Blueprint $table) {

            $table->id();
            $table->string('name', 100);
            $table->foreignId('tier_id')->constrained(table: 'tiers', indexName: 'id');
            $table->integer('price')->unsigned();
            $table->string('daypass',50);
            $table->string('credits',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
