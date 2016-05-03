<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityDevelopementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_developements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('daycare_id')->nullable();
            $table->double('daycare_hour',18,2)->nullable();
            $table->integer('shelter_id')->nullable();
            $table->double('shelter_hour',18,2)->nullable();
            $table->double('transportation_mile',18,2)->nullable();
            $table->double('job_training_hour',18,2)->nullable();
            $table->double('legal_assistance_hour',18,2)->nullable();
            $table->double('monentary_assistance',18,2)->nullable();
            $table->integer('onsite_feeding_meal')->nullable();
            $table->string('other_assistance')->nullable();
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
        Schema::drop('community_developements');
    }
}
