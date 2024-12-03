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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();

            // Foreign key for categories
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')
                ->references('id')         
                ->on('categories')        
                ->onUpdate('cascade')      
                ->onDelete('cascade');    

            // Other columns
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};