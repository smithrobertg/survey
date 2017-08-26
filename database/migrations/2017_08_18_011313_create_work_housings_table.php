<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_housings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->text('work_housing_events')->nullable();
            $table->string('supported_by_trafficker')->nullable();
            $table->text('other_work_events')->nullable();
            $table->timestamps();
        });

        Schema::create('work_housing_followups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->string('work_applied_for_outside_sex_trade')->nullable();
            $table->string('age_applied_for_first_job')->nullable();
            $table->string('age_applied_for_first_job_as_adult')->nullable();
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
        Schema::dropIfExists('work_housings');
        Schema::dropIfExists('work_housing_followups');
    }
}
