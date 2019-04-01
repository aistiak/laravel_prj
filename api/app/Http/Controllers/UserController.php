<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use App\Doctor;
use Illuminate\Support\Facades\Auth; 
use Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{

public $successStatus = 200;

/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            //return response()->json(['ok'=>gettype($user['accessToken']]);
            $success['token'] = $user->createToken('Laravel')-> accessToken; 
            $success['isRoleSelected'] = $user->isRoleSelected ;
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
             //return 'vag';
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 

        

        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password',
            'mobile_no' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }


        $input = $request->all();   

        // check if mail is available or not
        $check_mail =  DB::table('users')->where('email',$input['email'])->first() ;
        if (!is_null($check_mail)){
            return response()->json(['error' => 'this email is already taken'],401);
        }

        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 

        //$success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
        $success['isRoleSelected'] = $user->isRoleSelected;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

    public function test(){
        // demo update snippt 
        //$temp = DB::table('users')->where('name','ema')->update(['name'=>'suma']);
        
        return response()->json(['error'=>'Unauthorised'], 401); 
    }




}