<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorEperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_eperiences', function (Blueprint $table) {
             $table->increments('id');

            $table->integer('doctor_id')->unsigned();

            $table->string('designation');

            $table->string('org_name');

            $table->text('org_address');

            $table->date('from_date');

            $table->date('to_date')->nullable();

            $table->integer('status')->default(0);

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
        Schema::dropIfExists('doctor_eperiences');
    }
}
