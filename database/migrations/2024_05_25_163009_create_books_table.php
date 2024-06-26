<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->unique();
            $table->string('name');
            $table->integer('amount');
            $table->integer('price');
            $table->string('author');
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->integer('publish_year');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('publisher_id')->constrained('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
