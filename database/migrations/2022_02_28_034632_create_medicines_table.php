<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('generic_name', 511);
            $table->string('form', 255);
            $table->string('restriction_formula', 255)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id'); // Firstly, create column.
            $table->tinyInteger('faskes_tk1');
            $table->tinyInteger('faskes_tk2');
            $table->tinyInteger('faskes_tk3');
            $table->timestamps();

            $table->foreign('category_id') // Then, set the column as a foreign key;
                ->references('id')->on('categories'); // the foreign key refers to 'id' column on 'categories' table.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // First, drop the foreign key; the associated column will still be there as a normal column.
        });
        Schema::dropIfExists('medicines');
    }
}
