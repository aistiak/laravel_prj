<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;

class TestController extends Controller
{
    //

    public function test(Request $request){

           $input = $request->all();


           $dummy = Dummy::create($input);

/*           $dummy = Dummy::create([
                'name'=> $input['name'],
           ]);*/

           return $input;

    }
}
