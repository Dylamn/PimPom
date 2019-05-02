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
        availableEquipments: [],
        selectedEquipments: [],
        categories: [],
        error: null,
    },

    getters: {
        getAllEquipments: state => {
            return state.equipments;
        },

        getAvailableEquipments: state => {
            return state.availableEquipments;
        },

        getCategories: state => {
            return state.categories;
        },

        correspondingEquipments: (state) => (catId) => {
            return state.equipments.filter(equip => equip.categoryId === catId);
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

        switchToSelected (state, equipment) {
                for (let i = 0, l = arr.length; i < l; i++) {
                    if (state.equipments[i] === equipment) {
                        let selected = state.equipments.splice(i, 1);
                        
                        state.selectedEquipments.push(selected);
                    }
                }
        },

        fromSelectedToAvailable (state, oldEquipment, newEquipment) {
            
        },

        [types.FETCH_DATA_BEGAN] (state) {
            state.fetching = true;
        },

        [types.FETCH_DATA_FAILED] (state) {
            state.fetching = false;
            state.error = types.FETCH_DATA_FAILED;
        },

        [types.FETCH_DATA_SUCCESS] (state, payload) {

            switch (payload.target) {
                case 'equipment': {
                    state.equipments = payload.data;
                    break;
                }
                case 'category': {
                    state.categories = payload.data;
                    break;
                }

                default: {
                    state.error = "No target found.";
                    break;
                }
            }

            state.fetching = false;
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

                commit(types.FETCH_DATA_SUCCESS, {
                    target: 'equipment',
                    data: result.data
                });
            } catch (error) {
                commit(types.FETCH_DATA_FAILED);
            }
        },

        /**
         * Retrieve the list of all categories.
         *
         * @param commit
         * @returns {Promise<void>}
         */
        async fetchCategories ({ commit }) {
            commit(types.FETCH_DATA_BEGAN);

            try {
                let result = await axios.get('/api/categories');

                commit(types.FETCH_DATA_SUCCESS, {
                    target: 'category',
                    data: result.data
                });
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
