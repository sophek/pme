<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmotionalSpirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emotional_spirtuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('type_session_id')->nullable();
            $table->integer('grief_care')->nullable();
            $table->integer('end_of_life_care')->nullable();
            $table->integer('crisis_care')->nullable();
            $table->double('visitation',10,2)->nullable();
            $table->string('other_care')->nullable();
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
        Schema::drop('emotional_spirtuals');
    }
}
