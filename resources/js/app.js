/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';

/**
 * Secondly we will create a Vuex store which will contains the state
 * for our Vue application.
 */

import store from './store';

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
