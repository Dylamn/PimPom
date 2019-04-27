/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import 'es6-promise/auto';

Vue.use(Vuex);

/**
 * Secondly we will create a Vuex store which will contains the state
 * for our Vue application.
 *
 * @type {Store<{count: number}>}
 */

const store = new Vuex.Store({
    state: {
        count: 0,
    },
    mutations: {
        increment(state, value) {
            state.count += value;
        }
    }
});


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import LightPick from './components/LightPick';
import DeleteForm from './components/DeleteForm';
import BookingForm from './components/BookingForm';

const app = new Vue({
    el: '#app',

    store,
    components: {
        LightPick,
        DeleteForm,
        BookingForm,
    },
});
