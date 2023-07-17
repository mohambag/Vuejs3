import {createRouter, createWebHashHistory} from "vue-router";
import HomeSample from "@/components/HomeSample";
import PostSample from "@/components/PostSample";
import UserSample from "@/components/users/UserSample";
import ShowUser from "@/components/users/ShowUser";
import NotfoundSample from "@/components/NotfoundSample";
import {next} from "lodash/seq";
import PostSample1 from "@/components/PostSample1";

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
    {path: '/', name: "home", component: HomeSample},
    {
        path: '/user', name: "users", component: UserSample, children: [
            {path: ':id', name: 'showUser', component: ShowUser}
        ], beforEnter: (from, to) => {
            console.log('heeeeeeeeeeeeeeereeeeeeee');
            console.log(from, to);
            next()
        }
    },
    {path: '/post', name: "post", component: PostSample,children: [
            {path: ':id',component: PostSample1}
        ]},
    {path: '/:pathMatch(.*)*', name: 'NotFound', component: NotfoundSample},
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

router.beforeEach((to, from, next) => {
    if (to.name === 'post') next({name:'home'})
    else next()
})

export default router;
