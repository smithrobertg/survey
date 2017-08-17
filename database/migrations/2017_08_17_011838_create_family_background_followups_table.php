<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyBackgroundFollowupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        Schema::dropIfExists('family_background_followups');
    }
}
