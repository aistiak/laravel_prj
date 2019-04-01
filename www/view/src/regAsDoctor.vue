<template>
 <div>
 
    <b-form id='regAsDocform'>
    <h3>Please fill out the form below</h3>
    <b-form-group >
      <b-form-input v-model="title" type="text" placeholder="title" required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="name" type="text" placeholder="name" required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="subtitle" type="text" placeholder="sub title" required></b-form-input>
    </b-form-group>
    
    <b-form-group >
      <b-form-input v-model="mobile" type="text" placeholder="mobile no" required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="emergency_contact_person" type="emergency contact person" placeholder="emergency contact person" required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="emergency_contact_relation" type="emergency contact person" placeholder="emergency contact relation contact person" required></b-form-input>
    </b-form-group>    
    
    <b-form-group >
      <b-form-input v-model="emergency_phone" type="emergency contact person" placeholder="emergency phone" required></b-form-input>
    </b-form-group>


    <b-form-group >
      <b-form-input v-model="gender" type="emergency contact person" placeholder="F / M / U" required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="bmdc_regi_no" type="emergency contact person" placeholder="bmdc regi no." required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="permanent_address" type="emergency contact person" placeholder="permanent address" required></b-form-input>
    </b-form-group>

    <b-form-group >
      <b-form-input v-model="present_address" type="emergency contact person" placeholder="present address" required></b-form-input>
    </b-form-group>   

    <b-form-group >
      <b-form-input v-model="nationality" type="emergency contact person" placeholder="nationality" required></b-form-input>
    </b-form-group>   
      
    <b-form-group >
      <b-form-input v-model="description" type="emergency contact person" placeholder="description" required></b-form-input>
    </b-form-group> 

    <b-form-group >
      <b-form-input v-model="link" type="emergency contact person" placeholder="link" required></b-form-input>
    </b-form-group>     


    <b-form-group >
      <b-form-input v-model="department_id" type="emergency contact person" placeholder="department id" required></b-form-input>
    </b-form-group>
    
    <div class="text-center">
      <b-button  variant="primary" block @click="do_submit">submit</b-button>
    </div>

    <b-button variant="link" @click="test">test</b-button>

    </b-form>

 </div>

</template>

<style>
#regAsDocform{
	width: 500px;
	position : relative ;
	left :33%;
	margin-bottom:200px;
}
</style>
<script>
   // got to check if already registered as a doctor 
   // if so then show 'already registered as doctor'

   export default {

   		data(){
   			return {

   			}
   		},
   		methods: {



   			do_submit : function(){
              let endpoint =  'http://127.0.0.1:8000/api/regas_doc'
	           
	            let headers = {

			  			headers: {
			    		'Content-Type': 'application/json',
			    		'Accept' : 'application/json',
			    		'Authorization': 'Bearer '+$cookies.get('auth_token')
			  			}
			    } 

			    console.log(headers);
	        
   				let prams = {
   				   title: this.title ,
   				   name : this.name,
   				   subtitle : this.subtitle,
   				   mobile : this.mobile,
   				   emergency_contact_person : this.emergency_contact_person,
   				   emergency_contact_relation : this.emergency_contact_relation ,
   				   emergency_phone : this.emergency_phone,
   				   gender : this.gender ,
   				   bmdc_regi_no : this.bmdc_regi_no,
   				   permanent_address : this.permanent_address,
   				   present_address : this.present_address,
   				   nationality : this.nationality,
   				   description : this.description,
   				   link : this.link,
   				   department_id : this.department_id

   				}

   			    console.log(prams)	

   			    this.$http.post(endpoint,prams,headers).then(response =>{
                // 200
                window.location.href = '/home'
                return response.text()

            },response => {
                // 401
                return response.text()
            }).then(result=>{
                console.log(result)
            });
   			},

   			test : function(){
   			    console.log('in test')
   			    console.log($cookies.get('auth_token'))
   				let headers = {

			  			headers: {
			    		'Content-Type': 'application/x-www-form-urlencoded',
			    		'Accept' : 'application/json',
			    		'Authorization': 'Bearer '+$cookies.get('auth_token')
			  			}
			    } 

   				this.$http.post('http://127.0.0.1:8000/api/details',{},headers).then( response => {
   				   // 200
   				   return response.text()
   				}, response => {
   					//401
   					return response.text()
   				}).then( result => {
   				     console.log(result)
   				})
   			}

   		}
   } 
</script>