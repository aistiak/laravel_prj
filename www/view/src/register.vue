<template>


  <b-form id='regform'>
    <b-form-group :invalid-feedback="invalidFeedback">
      <b-form-input v-model="username" type="text" placeholder="Username" required></b-form-input>
    </b-form-group>

    <b-form-group :invalid-feedback="invalidFeedback">
      <b-form-input v-model="email" type="text" placeholder="email" required></b-form-input>
    </b-form-group>

    <b-form-group :invalid-feedback="invalidFeedback">
      <b-form-input v-model="mobile_no" type="text" placeholder="mobile no." required></b-form-input>
    </b-form-group>

    <b-form-group>
      <b-form-input v-model="password" type="password" placeholder="Password" required></b-form-input>
    </b-form-group>


    <b-form-group>
      <b-form-input v-model="c_password" type="password" placeholder="confirm Password" required></b-form-input>
    </b-form-group>

    <div class="text-center">
      <b-button  variant="primary" block @click="register">Sign up</b-button>
      <b-button variant="link" @click=""><a href='/login'>Sign in?</a></b-button>
    </div>

  </b-form>

</template>


<style>

#regform{
	width: 500px;
	position : relative ;
	left :33%;
}

</style>

<script>

 export default{

    data(){

    	return {
    	   msg : 'this is register page'
    	}
    },
    methods: {
    	register: function(){
 
   
          let endpoint = 'http://127.0.0.1:8000/api/register'

          
/*	      let headers = {

		  			headers: {
		    		'Content-Type': 'application/x-www-form-urlencoded',
		    		'Accept' : 'application/json',
		    		'Authorization': 'Bearer '+$cookies.get('auth_token')
		  			}
		  } 
 */        

 		  let prams = {

              name       : this.username,
              email      : this.email,
              mobile_no  : this.mobile_no,
              password   : this.password,
              c_password :this.c_password

          }
          this.$http.post(endpoint,prams).then(response => {
          	   // if all ok 200
          	   return response.json()	
          }, response => {
          	  // if error 401

          	  return response.json()	
          }).then( result => {
          	 console.log(result);

          	 if (result.error === undefined){
          	 	console.log('account created');
          	 	window.location.href  = '/login'	
          	 }else{

               
          	 }
          });
    	}
    }
 }

</script>