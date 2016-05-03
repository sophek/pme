<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('professional_visit_id')->nullable();
            $table->string('medical_care')->nullable();
            $table->string('dental_care')->nullable();
            $table->string('vision_care')->nullable();
            $table->string('hearing_care')->nullable();
            $table->string('health_screening')->nullable();
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
        Schema::drop('health_services');
    }
}
