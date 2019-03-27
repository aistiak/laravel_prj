<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Doctor;
use App\User;
use Validator;
class UserType extends Controller
{
    //


    public $successStatus = 200;
    public function registerAsDoctor(Request $request){


       $validator = Validator::make($request->all(), [ 
        'name' => 'required',
       ]);

       if ($validator->fails()) { 
        return response()->json(['error'=>$validator->errors()], 401);            
       }


        /*
        // works 
        $user = Auth::user(); 
        return response()->json(['success' => $user->id], $this-> successStatus); */

        $input  = $request->all();

        /*$doctor = Doctor::create($input);*/
        //return response()->json(['all'=>$input]);
        $doctor = Doctor::create([
            'name' => $input['name'],
        ]);

        return response()->json(['success'=>$doctor->name]);



    }
}
