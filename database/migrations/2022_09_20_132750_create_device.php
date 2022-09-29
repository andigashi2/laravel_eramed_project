<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();

            $table->string("type_of_device");
            $table->string("measurement_limits");
            $table->string("manufacturer");
            $table->string("serial_number");
            $table->string("current_location");
            $table->string("person_in_charge");

            $table->string("instrument_description");
            $table->string("manufacturer_details");
            $table->string("manufacturer_instructions");
            $table->string("maintenance_plan");
            $table->string("equipment_status");
            $table->string("eramed_laboratory_identification_code");

            $table->bigInteger("laboratory_id")->nullable();
            $table->bigInteger("intermediate_check_id")->nullable();
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
        Schema::dropIfExists('devices');
    }
}
