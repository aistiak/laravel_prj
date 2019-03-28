<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('doctor_id');

            $table->integer('patient_id');

            $table->integer('appointment_id');

            $table->string('patient_vitals')->nullable(); // was json

            $table->text('treatment_description')->nullable();

            $table->string('drugs')->nullable(); // was json

            $table->text('medical_test')->nullable();

            $table->text('advice')->nullable();

            $table->date('next_follow_up_date')->nullable();

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
        Schema::dropIfExists('prescriptions');
    }
}
