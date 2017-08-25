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
            $table->text('parent_or_adult_often')->nullable();
            $table->text('adult_or_person_5_years_older_ever')->nullable();
            $table->text('often_feel_that')->nullable();
            $table->text('mother_or_stepmother')->nullable();
            $table->string('parent_got_married')->nullable();
            $table->string('parent_separated_divorced')->nullable();
			$table->string('lived_with_alchoholic_or_drug_user')->nullable();
            $table->string('household_member_depressed_mentally_ill_suicide')->nullable();
            $table->string('household_member_went_to_prison')->nullable();
            $table->string('someone_else_came_to_live_with')->nullable();
            $table->string('moved_around_alot')->nullable();
            $table->string('homeless')->nullable();
            $table->string('ran_away')->nullable();
            $table->string('public_assistance')->nullable();
            $table->string('could_not_afford_heat_or_water')->nullable();
            $table->string('poverty')->nullable();
            $table->string('used_drugs_alcohol')->nullable();
            $table->string('addicted_drugs_alcohol')->nullable();
            $table->string('felt_life_threatened')->nullable();
            $table->string('foster_care')->nullable();
            $table->string('age_foster_care_ended')->nullable();
            $table->string('other_family_events')->nullable();
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
