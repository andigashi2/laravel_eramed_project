<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibrations', function (Blueprint $table) {
            $table->id();
            $table->date('cal_date');
            $table->string('nr_cert_cal');
            $table->string('cal_lab');
            $table->date('cal_due_date');
            $table->string('cal_interval');
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
        Schema::dropIfExists('calibrations');
    }
}
