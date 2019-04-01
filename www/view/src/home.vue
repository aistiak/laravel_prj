<template>

<div>
  <h1>{{msg}}</h1>

</div>

</template>


<script>	

export default{
	
	data(){
		return{
		  msg : 'welcome home'
		}
	},

	methods : {

		post : function(){

		        let endpoint = 'http://127.0.0.1:8000/api/details'
				
				let headers = {

			  		headers: {
			    		'Content-Type': 'application/json',
			    		'Accept' : 'application/json',
			    		'Authorization': 'Bearer '+$cookies.get('auth_token')
			  		}
			    }


			    this.$http.post(endpoint,{},headers).then( response=> {
			      // 200
			      return response.text()
			    }, response => {
			    	// 401
			      return response.text()		
			    }).then( result => {
			    	console.log(result)
			    	
			    }); 
		}
	}
}

</script>