require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './components/App.vue';
import VueSweetalert2 from 'vue-sweetalert2';

import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueRouter);
Vue.use(VueSweetalert2);
Vue.use(VueAxios, axios);

import UserIndex from './components/UserIndex.vue';
import UserCreate from './components/UserCreate.vue';
import UserShow from './components/UserShow.vue';
import UserEdit from './components/UserEdit.vue';

const routes = [{
        name: 'home',
        path: '/',
        component: UserIndex
    },
    {
        name: 'create',
        path: '/user/create',
        component: UserCreate
    },
    {
        name: 'edit',
        path: '/user/edit/:id',
        component: UserEdit
    },
    {
        name: 'show',
        path: '/user/show/:id',
        component: UserShow
    }
];

const router = new VueRouter({ mode: 'history', routes: routes });
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');