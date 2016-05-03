<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('cooking')->nullable();
            $table->integer('stop_smoking')->nullable();
            $table->integer('stress_management')->nullable();
            $table->integer('weight_management')->nullable();
            $table->integer('cpr')->nullable();
            $table->string('first_aid_type')->nullable();
            $table->integer('first_aid')->nullable();
            $table->integer('fitness')->nullable();
            $table->integer('healty_lifestyle')->nullable();
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
        Schema::drop('health_educations');
    }
}
