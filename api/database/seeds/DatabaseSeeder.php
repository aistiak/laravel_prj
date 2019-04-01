<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


/*    	$sql = base_path('sql/divisions.sql');
    	DB::unprepared(file_get_contents($sql));*/

    	$sql = base_path('sql/districts.sql');
    	DB::unprepared(file_get_contents($sql));

    }
}
