<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('type');
            // hospital/clinic/diagonistic center/ eye / vaccin point/ skin_care_center / rihab center 
            $table->string('owner_type');
            // gov/privat/

            //$table->string('address');
            $table->string('link')->nullable();
            $table->string('total_bed')->nullable();
            $table->string('total_doctor')->nullable();
            $table->string('total_staff')->nullable();
            $table->string('address')->nullable();
            $table->integer('district_id');

            $table->integer('upazila_id');

            $table->integer('status')->default(1);

            $table->integer('created_by')->nullable();

            $table->integer('updated_by')->nullable();

            $table->integer('deleted_by')->nullable();

            $table->softDeletes();

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
        Schema::dropIfExists('hospitals');
    }
}
