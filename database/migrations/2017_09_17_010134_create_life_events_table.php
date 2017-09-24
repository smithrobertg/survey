<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLifeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('life_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_category_id')->unsigned()->default(0);
            $table->string('event')->nullable();
            $table->string('prompt')->nullable();
            $table->string('field_name')->nullable();
            $table->string('field_id')->nullable();
            $table->boolean('timeline')->default(false);
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
        Schema::dropIfExists('life_events');
    }
}
