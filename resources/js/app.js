
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
    headerOffset = $('#nav').height();
    footerOffset = $('#footer').height();
    
    return $(window).height() - headerOffset;
}

function setTileHeight(){
    bodySize = getSizes();

    
    $('.tiles .tile').css('height', bodySize);
}

$(window).ready(function () {
    setTileHeight();
    $('input[name="q"]').focus();
    $('.loader').fadeOut();
    $('#content').removeClass('d-none');
});

$(window).on('resize', function(){
    setTileHeight();
});

$('#toggle-nav-open').on('click', function () {
    $('#toggle-nav-close').toggleClass('d-none');
    $('#toggle-nav-close').addClass('d-flex align-items-center');
    $('#icon-menu-text').fadeOut();

    $('#toggle-nav-open').toggleClass('d-none');
    $('#toggle-nav-open').removeClass('d-flex align-items-center');
    
    $('nav.sidenav').css('width', '100%');
});
$('#toggle-nav-close').on('click', function () {
    $('#toggle-nav-close').toggleClass('d-none');
    $('#toggle-nav-close').removeClass('d-flex align-items-center');
    $('#icon-menu-text').fadeIn();

    $('#toggle-nav-open').toggleClass('d-none');
    $('#toggle-nav-open').addClass('d-flex align-items-center');

    $('nav.sidenav').css('width', '0');
});
