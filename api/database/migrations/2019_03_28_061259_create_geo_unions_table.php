<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoUnionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_unions', function (Blueprint $table) {
//`id`, `name_eng`, `name_bng`, `geo_division_id`, `geo_district_id`, `geo_upazila_id`) VALUES

            $table->increments('id');
            $table->string('union_name_eng');
            $table->string('union_name_bng');
            $table->string('division_id');
            $table->string('district_id');
            $table->string('upazila_id');

            $table->integer('status')->default(1);

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
        Schema::dropIfExists('geo_unions');
    }
}
