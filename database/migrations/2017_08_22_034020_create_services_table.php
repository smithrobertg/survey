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
            $table->text('services_received')->nullable();
            $table->string('received_services_substance_abuse')->nullable();
            $table->string('received_services_mental_health')->nullable();
            $table->string('received_services_health_care_clinic')->nullable();
            $table->string('received_services_emergency_room')->nullable();
            $table->string('received_services_domestic_violence')->nullable();
            $table->string('received_services_sexual_assault')->nullable();
            $table->string('received_services_legal')->nullable();
            $table->string('received_services_employment')->nullable();
            $table->string('received_services_family')->nullable();
            $table->string('received_services_religious')->nullable();
            $table->string('received_services_housing')->nullable();
            $table->string('received_services_agency_help_exit_sex_trade')->nullable();
            $table->string('agency_help_exit_sex_trade')->nullable();
            $table->string('agency_help_exit_sex_trade_other')->nullable();
            $table->string('agency_helpful_exiting_sex_trade')->nullable();
            $table->text('other_services')->nullable();
            $table->timestamps();
        });

        Schema::create('services_followups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->default(0);
            $table->text('services_followup_events')->nullable();
            $table->text('explain_services_experiences')->nullable();
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
        Schema::dropIfExists('services');
        Schema::dropIfExists('services_followups');
    }
}
