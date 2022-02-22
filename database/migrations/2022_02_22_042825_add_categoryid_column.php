<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id'); // Firstly, create column.
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // First, drop the foreign key; the associated column will still be there as a normal column.
            $table->dropColumn('category_id'); // Then, drop the associated column that was a foreign key before.
        });
    }
}
