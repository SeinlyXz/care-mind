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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title'); // String column
            $table->string('slug')->unique(); // String column with unique constraint
            $table->string('thumbnail'); // String column
            $table->string('author_id');
            // Author merujuk ke table redaktur sebagai foreign key
            $table->foreign('author_id')->references('id')->on('redakturs')->onDelete('restrict')->onUpdate('cascade');
            // Long text column
            $table->longText('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
