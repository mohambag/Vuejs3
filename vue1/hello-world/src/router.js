import {createRouter, createWebHashHistory} from "vue-router";
import HomeSample from "@/components/HomeSample";
import PostSample from "@/components/PostSample";
import UserSample from "@/components/users/UserSample";
import ShowUser from "@/components/users/ShowUser";

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
    {path: '/', component: HomeSample},
    {
        path: '/user', component: UserSample, children: [
            {path: ':id',name:'showUser', component: ShowUser}
        ]
    },
    {path: '/post/:id', component: PostSample},
]
// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

export default router;
