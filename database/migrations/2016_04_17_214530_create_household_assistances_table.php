<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household_assistances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('bedding')->nullable();
            $table->integer('clothing')->nullable();
            $table->double('groceries',10,2)->nullable();
            $table->integer('cleaning_supplies')->nullable();
            $table->integer('personal_care_kit')->nullable();
            $table->integer('furniture')->nullable();
            $table->double('home_maintenance',10,2)->nullable();
            $table->double('monetary_assistance',10,2)->nullable();
            $table->string('other')->nullable();
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
        Schema::drop('household_assistances');
    }
}
