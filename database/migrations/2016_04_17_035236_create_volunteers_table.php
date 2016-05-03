<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('center_id')->unsigned()->index();
            $table->integer('count');
            $table->dateTime('volunteer_date');
            $table->double('hours',10,2);
            $table->double('expenses_salary',10,2);
            $table->double('expenses_other',10,2);
            $table->double('income_church',10,2);
            $table->double('income_corp',10,2);
            $table->double('income_individual',10,2);
            $table->double('income_fees',10,2);
            $table->double('income_others',10,2);
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
        Schema::drop('volunteers');
    }
}
