import Vue from "vue";

export default {
    namespaced: true,

    state: {
        publisher: {},
        publishers: []
    },

    getters: {
        getAll(state) {
            return state.publishers;
        },

        getSingle(state) {
            return state.publisher;
        }
    },

    actions: {
        fetchAll({ commit }) {
            return axios.get("/publishers").then(response => {
                commit("SET_ALL", response.data);
            });
        },

        fetchSingle({ commit }, id) {
            return axios.get(`/publishers/${id}`).then(response => {
                commit("SET_SINGLE", response.data);
            });
        }
    },

    mutations: {
        SET_ALL(state, publishers) {
            state.publishers = publishers;
        },
        SET_SINGLE(state, publisher) {
            state.publisher = publisher;
        }
    }
};
