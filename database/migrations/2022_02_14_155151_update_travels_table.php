<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travels', function (Blueprint $table) {
            $table->string('name', 20);
            $table->string('lastname', 20);
            $table->string('gender', 10);
            $table->tinyInteger('age')->unsigned();
            $table->date('depart');
            $table->date('return');
            $table->string('city', 20);
            $table->string('vehicle', 15);
            $table->tinyInteger('people')->unsigned();
            $table->string('telephone', 15);
            $table->BigInteger('ticket_code')->unsigned();
            $table->decimal('price', 10, 2);
            $table->tinyInteger('is_available')->unsigned()->default(1);
            $table->string('private', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
