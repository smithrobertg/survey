<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrientationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->string('year_born')->nullable();
            $table->string('age_started_living_on_own')->nullable();
            $table->string('highest_grade_completed')->nullable();
            $table->string('how_old_when_completed_school')->nullable();
            $table->string('childhood_event_description')->nullable();
            $table->string('childhood_event_age_or_year')->nullable();
            $table->string('adolescence_event_description')->nullable();
            $table->string('adolescence_event_age_or_year')->nullable();
            $table->string('adulthood_event_description')->nullable();
            $table->string('adulthood_event_age_or_year')->nullable();
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
        Schema::dropIfExists('orientations');
    }
}
