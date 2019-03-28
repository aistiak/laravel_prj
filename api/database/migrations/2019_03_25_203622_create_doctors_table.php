<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
/*            $table->increments('id');
            $table->string('name');
            $table->timestamps();*/
            
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index()->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');


            $table->string('title');

            $table->string('name');

            $table->string('subtitle')->nullable();

            $table->string('profile_picture')->nullable();

            $table->string('mobile');

            $table->string('emergency_contact_person')->nullable();

            $table->string('emergency_contact_relation')->nullable();

            $table->string('emergency_phone')->nullable();

            $table->enum('gender', ['M', 'F', 'U']);

            $table->integer('bmdc_regi_no');

            $table->text('permanent_address')->nullable();

            $table->text('present_address')->nullable();

            $table->string('nationality');

            $table->longText('description')->nullable();
            $table->string('link')->nullable();
            $table->integer('status')->default(1);
            $table->Integer('department_id')->unsigned()->nullable();
            


 
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
        Schema::dropIfExists('doctors');
    }
}
