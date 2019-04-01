<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use App\Doctor;
use App\Hospital;
use Illuminate\Support\Facades\Auth; 
use Validator;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    //
    public function regAsHospital(Request $request){



        /*  	name 	type 	owner_type 	link 	total_bed 	total_doctor 	total_staff 	address 	district_id 	upazila_id 	status 	 	 */
        $validator = Validator::make($request->all(),[

          'name' => 'required',
          'type' => 'required',
          'owner_type' => 'required',
          'address'  => 'required',
          'district_id' => 'required',
          'upazila_id' => 'required',

      ]);
        if($validator->fails()){
        	return response()->json(['error',$validator->srrors()],401);
        }

        


        //$hospital =  Hospital::create($input);
        $user = User::all()->where('email',Auth::User()->email)->first(); 
        $hospital  = Hospital::all()->where('user_id',Auth::User()->id)->first(); 
     
        if($hospital === null && $user->isRoleSelected === 0){
            $input = $request->all();
            $hospital =  Hospital::create($input);
            Auth::User()->hospital()->save($hospital);
            $user->isRoleSelected = true ;
            $user->role = 'hospital';
            $user->save();

            $success['isRoleSelected'] = $user->isRoleSelected;  
            $success['role'] = $user->role;

            return response()->json(['success' => $success],200) ;

        }else{
            //$error['isRoleSelected'] = $user->isRoleSelected;
            $error['msg'] = "user already a ".$user->role;

            return response()->json(['error' => $error]);
        }


        $success['name'] = $hospital->name ;
        return response()->json(['success',$success],200);
    }
}
