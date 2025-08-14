<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();                           // Primary key, auto-incrementing
            $table->date('date');              
            $table->string('name');             
            $table->integer('rate');
            $table->integer('boal');
            $table->integer('coal');
            $table->integer('amount');
            $table->string('status');
            $table->integer('rec_amount')->nullable();
            $table->integer('balance');
            // Add more columns as needed
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
        Schema::dropIfExists('entries');
    }
}
