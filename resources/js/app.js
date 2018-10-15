
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

var headerOffset;
var bodySize;

function getSizes(){
    console.info('getSizes')
    headerOffset = $('#nav').height();
    bodySize = $(window).height() - headerOffset;
}

function setTileHeight(){
    console.info('setTitleHeight')
    $('.tiles .tile').css('height', bodySize);
}

$(window).on('load', function(){
    getSizes();
    setTileHeight();
});

$(window).on('resize', function(){
    console.info({'height': $(window).height(), 'width': $(window).width()});
    getSizes();
    setTileHeight();
});

ScrollReveal({ reset: true }).reveal('.test-reveal', {
    delay: 500 
});

$('#toggle-nav-open').on('click', function () {
    $('#toggle-nav-close').toggleClass('d-none');
    $('#toggle-nav-open').toggleClass('d-none');
    $('nav.sidenav').toggleClass('d-none');
    $('nav.sidenav').css('width', '50%');
});
$('#toggle-nav-close').on('click', function () {
    $('#toggle-nav-close').toggleClass('d-none');
    $('#toggle-nav-open').toggleClass('d-none');
    $('nav.sidenav').toggleClass('d-none');
    $('nav.sidenav').css('width', '0');
});
