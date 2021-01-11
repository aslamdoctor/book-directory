require("./bootstrap");

import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

import Vuex from "vuex";
Vue.use(Vuex);
import store from "./store";

//Main pages
import App from "./views/app.vue";
import Home from "./views/home.vue";
import About from "./views/about.vue";
import Publishers from "./views/publishers.vue";
import PublisherById from "./views/publisherById.vue";
import Authors from "./views/authors.vue";
import AuthorById from "./views/authorById.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        { path: "/", component: Home },
        { path: "/about", component: About },
        { path: "/publishers", component: Publishers },
        { path: "/publishers/:id", component: PublisherById },
        { path: "/authors", component: Authors },
        { path: "/authors/:id", component: AuthorById }
    ]
});

const app = new Vue({
    el: "#app",
    components: { App },
    router,
    store
});
