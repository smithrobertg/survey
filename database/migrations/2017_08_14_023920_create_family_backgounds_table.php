<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyBackgoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->string('parent_got_married');
            $table->string('parent_or_adult_often');
            $table->string('adult_or_person_5_years_older_ever');
            $table->string('often_feel_that');
            $table->string('parent_separated_divorced');
            $table->string('mother_or_stepmother');
            $table->string('lived_with_alchoholic_or_drug_user');
            $table->string('household_member_depressed_mentally_ill_suicide');
            $table->string('household_member_went_to_prison');
            $table->string('someone_else_came_to_live_with');
            $table->string('moved_around_alot');
            $table->string('homeless');
            $table->string('ran_away');
            $table->string('public_assistance');
            $table->string('could_not_afford_heat_or_water');
            $table->string('poverty');
            $table->string('used_drugs_alcohol');
            $table->string('addicted_drugs_alcohol');
            $table->string('felt_life_threatened');
            $table->string('foster_care');
            $table->string('age_foster_care_ended');
            $table->string('other_family_events');
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
        Schema::dropIfExists('family_backgrounds');
    }
}
