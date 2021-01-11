import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

import author from "./author";
import publisher from "./publisher";

export default new Vuex.Store({
    strict: true,
    modules: {
        author,
        publisher
    }
});
