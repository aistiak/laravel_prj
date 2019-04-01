<template>

<div>

  <div class="main">
	  <h3>Choose your accout type</h3>
	  <b-button class="paitent" variant="outline-primary">Paitent</b-button>
	  <b-button class="doctor" variant="outline-secondary" @click="be_doctor">Doctor</b-button>
	  <b-button class="hospital" variant="outline-success">Hospital</b-button>
  </div>


</div>

</template>


<style>
.main{
	margin-top:210px;
}
</style>

<script>


export default {
	
	data(){
		return {
			msg : 'hello this is options page'
		}
	},
	methods: {
       be_doctor : function(){

          window.location.href  = '/options/regAsDoctor'
       }
	}
}

</script>