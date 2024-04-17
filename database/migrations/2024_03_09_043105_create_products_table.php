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
            $table->string('name');
            $table->string('subname');
            $table->string('origin');
            $table->string('type'); // Arabica || Robusta || Bourbon
            $table->integer('price');
            $table->text('description');

            $table->string('acidity');  // Low || Medium || High
            $table->string('flavor');// earthy || chocolate || fruit || nutty
            $table->string('aftertaste');// complex || lingering || short
            $table->string('sweetness');// faint || noticeable || rich

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
