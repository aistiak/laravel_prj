<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique()->nullable();
            $table->string('name');
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('role')->default('patient'); // get the role from hear
            // have to create a boolean field that indicates if the rolde has been confirmed
            // like isRoleSelected
            $table->boolean('isRoleSelected')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
