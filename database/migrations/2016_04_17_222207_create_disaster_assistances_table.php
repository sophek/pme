<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisasterAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disaster_assistances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('bedding')->nullable();
            $table->integer('clothing')->nullable();
            $table->integer('groceries')->nullable();
            $table->integer('cleaning_supplies')->nullable();
            $table->integer('personal_care_kit')->nullable();
            $table->integer('diapers')->nullable();
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
        Schema::drop('disaster_assistances');
    }
}
