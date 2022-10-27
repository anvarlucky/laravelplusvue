import vueRouter from 'vue-router';
import Vue from 'vue/dist/vue.js';

Vue.use(vueRouter);
import Index from "./views/Index";
//import Other from "./views/Other";

const routes =[
    {
        path: "/test",
        component: Index
    }/*,
    {
        path:"/other",
        component: Other
    }*/
];

export default new vueRouter({
    mode:'history',
    router:routes
});
