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
            $table->tinyInteger('Age');
            $table->date('Depart');
            $table->date('Return');
            $table->string('City', 20);
            $table->string('type', 15);
            $table->string('vehicle', 15);
            $table->tinyInteger('people');
            $table->string('telephone', 10);
            $table->mediumInteger('Ticket Code');
            $table->decimal('price', 10, 2);
            $table->tinyInteger('is_available')->unsigned()->default(1);
            $table->tinyInteger('private')->unsigned()->default(1);
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
