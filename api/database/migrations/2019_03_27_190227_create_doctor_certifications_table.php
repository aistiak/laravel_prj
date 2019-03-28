<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_certifications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('doctor_id');

            $table->string('title');

            $table->string('institute_name');

            $table->string('institute_addresss');

            $table->date('published_date');

            $table->text('details');

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
        Schema::dropIfExists('doctor_certifications');
    }
}
