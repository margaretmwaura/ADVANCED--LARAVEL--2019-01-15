
require('./bootstrap');

require('./components');
import Vue from "vue";
import VueRouter from 'vue-router';
import Create_blog from "./components/Create_blog.vue";
import Edit_bllog from "./components/Edit_bllog.vue";
import Read_blog from "./components/Read_blog.vue";
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
import App from "./components/App.vue";

Vue.use(VueRouter);

// import Vue from 'vue'
const router = new VueRouter({
    mode: 'history',
});

new Vue({
    router,
}).$mount('#root');
