
import './bootstrap';
import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import Login from '@/components/Login.vue';
import User from '@/components/User.vue';
import Register from '@/components/Register.vue';

const routes = [
  {
    path: '/',
    name: 'Login',
    component: Login
  },
  {
    path: '/user',
    name: 'User',
    component: User 
  },
  {
    path: '/register',
    name: 'Register',
    component: Register 
  }

]

const app = createApp({});

const router = createRouter({
  history: createWebHistory(),
  routes,
  mode:'history'
});

app.use(router).mount('#app')
