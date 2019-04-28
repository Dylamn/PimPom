import Vue from 'vue';
import Vuex from 'vuex';
import 'es6-promise/auto';

// Import mutation types
import { FETCH_DATA_BEGAN } from "./mutation-types";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        count: 0,
    },
    getters: {
        getCount: state => {
            return state.count;
        }
    },

    mutations: {
        increment(state, value) {
            state.count += value;
        },

        decrement (state, value) {
          state.count -= value;
        },
        [FETCH_DATA_BEGAN] (state) {

        }
    },

    actions: {
        async getEquipments({ commit, state }) {

        },

        async incrementASync({ commit, state }, value) {
            setTimeout(() => {
                commit('increment', value);
            }, 2000);
        }
    }
});

export default store;
