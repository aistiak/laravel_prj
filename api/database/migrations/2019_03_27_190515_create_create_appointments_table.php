<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('patient_id');

            $table->integer('doctor_id');

            $table->integer('chamber_id');

            $table->integer('serial_no')->nullable();

            $table->dateTime('appointment_time');

            $table->string('appointment_slot');

            $table->string('appointment_type')->nullable();

            $table->string('appointment_double_confirmed')->default(0);

            $table->text('details')->nullable();

            $table->integer('payment_status')->default(0);

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
        Schema::dropIfExists('create_appointments');
    }
}
