<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempUserIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_user_ids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('temp_user_id');
            $table->string('gender');
            $table->string('for');
            //$table->string('email')->nullable();
            //$table->string('password');
            //$table->string('role')->default('patient');
            //$table->rememberToken();
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
        Schema::dropIfExists('temp_user_ids');
    }
}
