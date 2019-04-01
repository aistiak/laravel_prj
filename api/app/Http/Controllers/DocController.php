<?php

namespace App\Http\Controllers;
use App\User; 
use Validator;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 

class DocController extends Controller
{
    //

    public function RegisterAsDoc(Request $request){
            //return response()->json(['prams'=> $request->all()], 401);
            $validator = Validator::make($request->all(), [ 
                   'title'=> 'required',
                   'name' => 'required',
                   'subtitle' => 'required',
                   'mobile' => 'required',
                   'emergency_contact_person' => 'required',
                   'emergency_contact_relation' => 'required' ,
                   'emergency_phone' => 'required',
                   'gender' => 'required',
                   'bmdc_regi_no' => 'required',
                   'permanent_address' => 'required',
                   'present_address' => 'required',
                   'nationality' => 'required',
                   'description' => 'required',
                   'link' => 'required',
                   'department_id' => 'required',
            ]);
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            } 

           $user = User::all()->where('email',Auth::User()->email)->first(); 
           $doc  = Doctor::all()->where('user_id',Auth::User()->id)->first();  

           if($doc === null && $user->isRoleSelected === 0){
                $input = $request->all();
                $doctor = Doctor::create($input);
                Auth::User()->doctor()->save($doctor);
                $user->isRoleSelected = true ;
                $user->role = 'doctor';
                $user->save();
                
                $success['isRoleSelected'] = $user->isRoleSelected;  
                $success['role'] = $user->role;

                return response()->json(['success' => $success],200) ;

           }else{
                $error['msg'] = "user already a ".$user->role;
                return response()->json(['error' => $error ]);
           }
 
    

    }
}
