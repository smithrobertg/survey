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
            $table->text('father_or_stepfather')->nullable();
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
            $table->text('other_family_events')->nullable();
            $table->timestamps();
        });

        Schema::create('family_background_followups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->text('turned_to_for_support')->nullable();
            $table->text('turned_to_for_support_other')->nullable();
            $table->text('foster_care_places_lived')->nullable();
            $table->text('positive_foster_placements')->nullable();
            $table->text('how_many_positive_foster_placements')->nullable();
            $table->text('positive_foster_placements_description')->nullable();
            $table->text('negative_foster_placements')->nullable();
            $table->text('how_many_negative_foster_placements')->nullable();
            $table->text('negative_foster_placements_description')->nullable();
            $table->text('reason_left_foster_care')->nullable();
            $table->text('reason_left_foster_care_other')->nullable();
            $table->text('option_to_sign_back_in_when_18')->nullable();
            $table->text('signed_back_in_when_18')->nullable();
            $table->text('sign_back_in_decision_factors')->nullable();
            $table->text('role_leaving_foster_care_had')->nullable();
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
        Schema::dropIfExists('family_background_followups');

    }
}
