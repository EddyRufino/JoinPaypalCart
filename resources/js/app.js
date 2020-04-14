require('./bootstrap');

window.Vue = require('vue');

const Vuex = require('vuex');

window.store = new Vuex.Store({
    state: {
        productsCount: 0,
    },
    mutations: {
        increments(state) {
            return state.productsCount++;
        },
        set(state, value) {
            return state.productsCount = value;
        }
    }
})

Vue.component('product', require('./components/Product.vue').default);
Vue.component('product-card', require('./components/ProductCard.vue').default);
Vue.component('material-collection', require('./components/animations/MaterialCollection.vue').default);
Vue.component('add-to-card', require('./components/AddToCart.vue').default);

Vue.component('product-counter', require('./components/shopping_cart/Counter.vue').default);
Vue.component('products-shopping', require('./components/shopping_cart/ProductsShoppingCart.vue').default);


const app = new Vue({
    el: '#app',
});
