<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $guarded = [];
/*    protected $fillable = [
    	 'title','name','subtitle','profile_picture','mobile','emergency_contact_person','emergency_phone','gender','bmdc_regi_no','permanent_address','present_address','nationality','description','link','status','department_id',
    ];*/

    public function user(){

    	return $this->belongsTo(User::class);
    				  
    }
}
