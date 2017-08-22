<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->string('social_service_agency_reached_out')->nullable();
            $table->string('social_service_received')->nullable();
            $table->text('services_sought')->nullable();
            $table->text('services_received')->nullable();
            $table->string('other_services')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            //$table->string('field')->nullable();
            $table->timestamps();
        });

        Schema::create('services_followups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->string('services_followup_events')->nullable();
            $table->string('agency_help_exit_sex_trade')->nullable();
            $table->string('agency_help_exit_sex_trade_other')->nullable();
            $table->string('explain_services_experiences')->nullable();
            $table->increments();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('services_followups');
    }
}
