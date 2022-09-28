<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('methods');
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->integer('value');
            $table->integer('unit');
            $table->float('max_difference', 2, 2);
            $table->float('axial_uni_uncertified', 2, 2);
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
        Schema::dropIfExists('methods');
    }
}
