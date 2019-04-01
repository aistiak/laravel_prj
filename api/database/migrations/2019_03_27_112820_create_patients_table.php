<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('name');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->text('address');
            $table->integer('district_id');
            $table->integer('upzila_id');
            $table->string('mobile');
            $table->string('alternate_phone')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('blood_group')->nullable();
            $table->enum('gender', ['M', 'F', 'U']);
            $table->string('profession')->nullable();           
            $table->string('nationality');
            $table->string('profile_picture')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
