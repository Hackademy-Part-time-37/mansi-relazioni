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
        Schema::create('book_category', function (Blueprint $table) {
            $table->id();
            //Creo colonne fisicamente nel db
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('category_id');
            //Creo relazioni nel DB
            $table
                ->foreign('book_id')
                ->references('id') //nome della colonna
                ->on('books'); //nome della tabella da cui prednere la PK

            $table
                ->foreign('category_id')
                ->references('id') //nome della colonna
                ->on('categories'); //nome della tabella da cui prednere la PK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};
