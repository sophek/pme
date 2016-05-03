<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->double('all_sources',10,2)->nullable();
            $table->string('comment')->nullable(); 
            $table->string('education')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_type');
            $table->string('id_number');
            $table->string('gender');
            $table->string('race');
            $table->string('maritial'); 
            $table->string('surname')->nullable();
            $table->dateTime('dob');
            $table->double('monthly_income',10,2);
            $table->string('maiden_name')->nullable();
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
        Schema::drop('client_infos');
    }
}
