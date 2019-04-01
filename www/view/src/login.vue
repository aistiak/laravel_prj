<template>

  <b-form id='loginform'>
    <p v-if='show'>{{msg}}</p>
    <b-form-group>
      <b-form-input v-model="email" type="text" placeholder="Username" required/>
    </b-form-group>

    <b-form-group :invalid-feedback="invalidFeedback">
      <b-form-input v-model="password" type="password" placeholder="Password" required/>
    </b-form-group>

    <div class="text-center">
      <b-button type='submit' variant="primary" block v-on:click.prevent='post'>Sign In</b-button>
      <b-button variant="link" @click=""><a href='/register'>Sign Up?</a></b-button>
    </div>
  </b-form>
</template>
<style >

#loginform{
	width: 500px;
	position : relative ;
	left :33%;
}

</style>
<script>

export default{
	

	data(){
		return {
		   msg : 'welcome to login page',
		   warn : 'credentials not correct',
		   show : true ,
		}	
	},
	methods :{

		post : function(){
	/*	       let headers = {
		  			headers: {
		    		'Content-Type': 'application/x-www-form-urlencoded',
		    		'Accept' : 'application/json',
		    		'Authorization': 'Bearer '+$cookies.get('auth_token')
		  			}
			   } */
            
		    var endpoint = 'http://127.0.0.1:8000/api/login';
			var prams = {
				email : this.email,
				password : this.password
			}
			this.$http.post(endpoint, prams).then(response => {
				//  if 200 all ok
				return response.json();
			}, response => {
			    // if 401 error 
				console.log(response.status);
				if(response.status == '401'){
				 	console.log('email or password wrong');
				}
				
				return response.json();

			}).then(result => {
			    
                console.log(result)
			    console.log(result.error === undefined);
			    
			    if(result.error === undefined){
                   //console.log(result.success.token)
                   $cookies.set('auth_token',result.success.token)
                   $cookies.set('isRoleSelected',result.success.isRoleSelected)
                   console.log($cookies.get('auth_token'))

                   if (!result.success.isRoleSelected){
                       window.location.href  = '/options'
                   }else{
                       window.location.href  = '/home'
                   }
                   
			    }
				//$cookies.set
			})
		}


 }

}


</script>