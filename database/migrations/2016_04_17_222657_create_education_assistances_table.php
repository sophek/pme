<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_assistances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id')->unsigned()->index();
            $table->integer('type_session_id')->nullable();
            $table->double('esl',18,2)->nullable();
            $table->double('finanical_planning',18,2)->nullable();
            $table->double('mentoring',18,2)->nullable();
            $table->double('tutoring',18,2)->nullable();
            $table->double('parenting',18,2)->nullable();
            $table->double('retirement_planning',18,2)->nullable();
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
        Schema::drop('education_assistances');
    }
}
