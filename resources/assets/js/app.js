
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',

    data: {
        form: {
            email: '',
            product: '',
        }
    },

    mounted() {
        //
    },

    methods: {
        order(product) {
            this.form.product = product;

            axios.post('/order', this.form)
                .then(() => {
                    swal('Thanks!', "Your vote has been noted.")
                })
                .catch(() => {
                    swal('Sorry', "Either that's not an email or someone already used that email.")
                })
        }
    }
})
