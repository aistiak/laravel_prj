<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorChambersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_chambers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chamber_name');
            $table->text('address');
            $table->integer('district_id');
            $table->integer('upazila_id');
            $table->string('phone_number');
            $table->string('google_map_location');
            $table->double('visit');
            $table->double('visit_type');
            $table->double('second_visit')->nullable();
            $table->double('report_visit')->nullable();
            $table->integer('early_payment')->default(0);
            $table->integer('early_payment_partial')->default(0);
            $table->double('early_payment_partial_fee')->nullable();
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('doctor_id');//->after('id')\\;
            $table->integer('hospital_id')->nullable();
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
        Schema::dropIfExists('doctor_chambers');
    }
}
