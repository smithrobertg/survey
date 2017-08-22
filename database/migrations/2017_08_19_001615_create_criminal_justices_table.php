<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalJusticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminal_justices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->text('criminal_justice_events')->nullable();
            $table->text('other_criminal_justice_events')->nullable();
            $table->timestamps();
        });

        Schema::create('criminal_justice_followups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->text('issues_because_of_criminal_record')->nullable();
            $table->text('arrested_charges')->nullable();
            $table->text('convicted_charges')->nullable();
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
        Schema::dropIfExists('criminal_justices');
        Schema::dropIfExists('criminal_justice_followups');
    }
}
