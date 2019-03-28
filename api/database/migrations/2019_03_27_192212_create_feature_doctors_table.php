<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_doctors', function (Blueprint $table) {
       $table->increments('id');
            $table->integer('doctor_id');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->integer('status');
            $table->integer('feature_type');
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
        Schema::dropIfExists('feature_doctors');
    }
}
