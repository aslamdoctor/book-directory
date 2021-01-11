import Vue from "vue";

export default {
    namespaced: true,

    state: {
        author: {},
        authors: []
    },

    getters: {
        getAll(state) {
            return state.authors;
        },

        getSingle(state) {
            return state.author;
        }
    },

    actions: {
        fetchAll({ commit }) {
            return axios.get("/authors").then(response => {
                commit("SET_ALL", response.data);
            });
        },

        fetchSingle({ commit }, id) {
            return axios.get(`/authors/${id}`).then(response => {
                commit("SET_SINGLE", response.data);
            });
        }
    },

    mutations: {
        SET_ALL(state, authors) {
            state.authors = authors;
        },
        SET_SINGLE(state, author) {
            state.author = author;
        }
    }
};
