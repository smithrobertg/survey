<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->integer('participant_id')->default(0);
            $table->string('gender')->nullable();
            $table->string('gender_self_describe')->nullable();
            $table->string('state_residence')->nullable();
            $table->string('race_ethnicity')->nullable();
            $table->string('race_other')->nullable();
            $table->string('born_in_us')->nullable();
            $table->string('born_where')->nullable();
            $table->string('how_long_lived_in_us')->nullable();
            $table->string('brought_to_us_by_trafficker')->nullable();
            $table->string('indentify_as')->nullable();
            /*
            $table->string('indentify_as_survivor')->nullable();
            $table->string('indentify_as_controlled')->nullable();
            $table->string('indentify_as_exchanged_sex')->nullable();
            $table->string('indentify_as_someone_paid_another_sex_exchange')->nullable();
            $table->string('indentify_as_sex_for_money_forced_or_asked')->nullable();
            $table->string('indentify_as_sex_worker')->nullable();
            */
            $table->text('describe_becoming_legal_adult')->nullable();
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
        Schema::dropIfExists('demographics');
    }
}
