
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('noty');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('follower', require('./components/Follower.vue'));
Vue.component('following', require('./components/Following.vue'));
Vue.component('followingbiz', require('./components/Followingbiz.vue'));
Vue.component('postphoto', require('./components/Postphoto.vue'));
Vue.component('feed', require('./components/Feed.vue'));
Vue.component('myfeed', require('./components/Myfeed.vue'));
Vue.component('mybizfeed', require('./components/Mybizfeed.vue'));
Vue.component('like', require('./components/Like.vue'));
Vue.component('init', require('./components/Init.vue'));
Vue.component('favorite', require('./components/Favorite.vue'));
Vue.component('comment', require('./components/Comments.vue'));
Vue.component('commentadd', require('./components/Commentsadd.vue'));
Vue.component('commentwrapper', require('./components/Commentswrapper.vue'));
Vue.component('commentcount', require('./components/Commentscount.vue'));
Vue.component('share', require('./components/Share.vue'));
import { store } from './store'

window.eventBus = new Vue({});

const app = new Vue({
    el: '#app',
    store
});
