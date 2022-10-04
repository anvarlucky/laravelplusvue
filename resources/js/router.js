import vueRouter from 'vue-router';
import vue from 'vue';

Vue.use(vueRouter);
import Index from "./views/Index";
import Other from "./views/Other";

const routes =[
    {
        path: "/",
        component: Index
    },
    {
        path:"/other",
        component: Other
    }
];

export default new vueRouter({
    mode:'history',
    routes
});