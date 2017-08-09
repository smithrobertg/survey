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
            $table->string('year_born');
            $table->string('age_started_living_on_own');
            $table->string('highest_grade_completed');
            $table->string('how_old_when_completed_school');
            $table->string('childhood_event_description');
            $table->string('childhood_event_age_or_year');
            $table->string('adolescence_event_description');
            $table->string('adolescence_event_age_or_year');
            $table->string('adulthood_event_description');
            $table->string('adulthood_event_age_or_year');
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
