import Vue from 'vue'
import App from './App.vue'
import login from './login.vue'
import VueRouter from 'vue-router'
import Routes from './routes'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VueResource from 'vue-resource'
import VueCookies from 'vue-cookies'

Vue.use(VueCookies)
Vue.use(VueRouter)
Vue.use(BootstrapVue)
Vue.use(VueResource)

const router = new VueRouter({

	routes : Routes ,
	mode   : 'history'
});


Vue.component('login',login);

new Vue({
  el: '#app',
  render: h => h(App),
  router : router
})
