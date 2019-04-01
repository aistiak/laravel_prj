import login from './login.vue'
import register from './register.vue'
import options from './options.vue'
import regAsDoctor from './regAsDoctor'
import regAsHospital from './regAsHospital'
import home from './home.vue'
import app from './App.vue'

export default [
    { path:'/' , component: app},
    { path:'/login' , component: login},
    { path:'/register' , component : register},
    { path:'/options' , component: options},
    { path:'/options/regAsDoctor', component: regAsDoctor},
    { path:'/options/regAsHospital', component: regAsHospital},
    { path:'/home', component: home}
]