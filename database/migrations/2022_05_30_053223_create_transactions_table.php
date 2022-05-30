<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('buyer_id'); // Firstly, create column.
            $table->foreign('buyer_id') // Then, set the column as a foreign key;
                ->references('id')->on('buyers'); // the foreign key refers to 'id' column on 'categories' table.
            
                $table->unsignedBigInteger('user_id'); // Firstly, create column.
            $table->foreign('user_id') // Then, set the column as a foreign key;
                ->references('id')->on('users'); // the foreign key refers to 'id' column on 'categories' table.
            
            $table->dateTime('transaction_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['buyer_id']); // First, drop the foreign key; the associated column will still be there as a normal column.
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // First, drop the foreign key; the associated column will still be there as a normal column.
        });
        Schema::dropIfExists('transactions');
    }
}
