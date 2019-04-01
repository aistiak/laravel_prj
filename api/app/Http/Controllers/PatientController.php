<?php

namespace App\Http\Controllers;

use App\User; 
use Validator;
use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 

class PatientController extends Controller
{
    //
    /*
             	id 	title 	name 	user_id 	address 	district_id 	upzila_id 	mobile 	alternate_phone 	emergency_contact_person 	emergency_contact_relation 	emergency_phone 	dob 	blood_group 	gender 	profession 	nationality 	profile_picture 	status 	created_by 	updated_by 	deleted_by 	deleted_at 	created_at 	updated_at 
    */
    public function regAsPatient(Request $request){
        
   
        
       
    	$validator = Validator::make($request->all(),[
             'name' => 'required',
             'address' => 'required',
             'district_id' => 'required',
             'upzila_id' => 'required',
             'mobile' => 'required',
             'gender' => 'required',
             'nationality' => 'required',

 
    	]);

    	if($validator->fails()){

    		return response()->json(['error',$validator->erros()],401);
    	}

    	   $user = User::all()->where('email',Auth::User()->email)->first(); 
           $patient  = Patient::all()->where('user_id',Auth::User()->id)->first();  

           if($patient === null && $user->isRoleSelected === 0){
                $input = $request->all();
                $patient = Patient::create($input);
                Auth::User()->patient()->save($patient);
                $user->isRoleSelected = true ;
                $user->role = 'patient';
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
