import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Contact from "./pages/Contact.vue";
import Show from "./pages/posts/Show.vue";
import Index from "./pages/posts/Index.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "home",
            component: Home,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
        {
            path: "/contact",
            name: "contact",
            component: Contact,
        },
        {
            path: "/posts/:id",
            name: "show",
            component: Show,
        },
        {
            path: "/posts",
            name: "index",
            component: Index,
        },
    ],
});

export default router;
