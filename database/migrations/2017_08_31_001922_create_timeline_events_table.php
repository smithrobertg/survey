<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->integer('life_event_id')->unsigned()->default(0);
			//$table->integer('event_category_id')->unsigned()->default(0);
            //$table->string('event_category');
            //$table->string('event_description');
            $table->string('timeframe')->nullable();
            $table->string('age')->nullable();
            $table->string('year')->nullable();
            $table->string('range_from')->nullable();
            $table->string('range_to')->nullable();
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
        Schema::dropIfExists('timeline_events');
    }
}
