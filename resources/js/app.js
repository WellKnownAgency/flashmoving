
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*const app = new Vue({
    el: '#app'
});*/

window.Typed = require('typed.js');

// ScroolBar
import ScrollProgress from 'scrollprogress';

const progressElement = document.querySelector('.progress-bar');

const progressObserver = new ScrollProgress((x, y) => {
    progressElement.style.width = y * 100 + '%';
});

// ScrollTop
$(document).ready(function(){
    var scrollToTopEl = $('.scroll-to-top');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            scrollToTopEl.fadeIn();
        } else {
            scrollToTopEl.fadeOut();
        }
    });
    scrollToTopEl.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});

