<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_transaction', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('transaction_id'); // Firstly, create column.
            $table->foreign('transaction_id') // Then, set the column as a foreign key;
                ->references('id')->on('transactions'); // the foreign key refers to 'id' column on 'categories' table.

            $table->unsignedBigInteger('medicine_id'); // Firstly, create column.
            $table->foreign('medicine_id') // Then, set the column as a foreign key;
                ->references('id')->on('medicines'); // the foreign key refers to 'id' column on 'categories' table.
            
            $table->bigInteger('quantity');
            $table->double('price');
            
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
        Schema::table('medicine_transaction', function (Blueprint $table) {
            $table->dropForeign(['medicine_id']); // First, drop the foreign key; the associated column will still be there as a normal column.
        });
        Schema::table('medicine_transaction', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']); // First, drop the foreign key; the associated column will still be there as a normal column.
        });
        Schema::dropIfExists('medicine_transaction');
    }
}
