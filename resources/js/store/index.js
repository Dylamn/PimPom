import Vue from 'vue';
import Vuex from 'vuex';
import 'es6-promise/auto';

// Import mutation types
import * as types from "./mutation-types";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        count: 0,
        fetching: false,
        equipments: [],
        categories: [],
    },

    getters: {
        getEquipments: state => {
            return state.equipments;
        },

        getCategories: state => {
            return state.categories;
        },

        getCount: state => {
            return state.count;
        }
    },

    mutations: {
        increment (state, value) {
            state.count += value;
        },

        decrement (state, value) {
            state.count -= value;
        },

        [types.FETCH_DATA_BEGAN] (state) {
            state.fetch = types.FETCH_DATA_BEGAN;
        },
        [types.FETCH_DATA_FAILED] (state) {
            state.fetch = types.FETCH_DATA_FAILED;
        },

        [types.FETCH_DATA_SUCCESS] (state, payload) {
            state.equipments = payload;
            state.fetch = types.FETCH_DATA_SUCCESS;
        }
    },

    actions: {

        /**
         * Retrieve the list of available equipments.
         *
         * @param commit
         * @returns {Promise<void>}
         */
        async fetchEquipments ({ commit }) {
            commit(types.FETCH_DATA_BEGAN);

            try {
                let result = await axios.get('/api/equipments');

                commit(types.FETCH_DATA_SUCCESS, result.data);
            } catch (error) {
                commit(types.FETCH_DATA_FAILED);
            }
        },

        async fetchCategories ({ commit }) {
          commit(types.FETCH_DATA_BEGAN);

          try {
              let result = await axios.get('/api/categories');

              commit(types.FETCH_DATA_SUCCESS, result.data);
          } catch (error) {
              commit(types.FETCH_DATA_FAILED);
          }
        },

        async incrementASync ({ commit, state }, value) {
            setTimeout(() => {
                commit('increment', value);
            }, 2000);
        }
    }
});

export default store;
