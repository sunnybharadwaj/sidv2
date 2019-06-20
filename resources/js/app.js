// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// window.Vue = require('vue');
//
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
// // const files = require.context('./', true, /\.vue$/i);
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// const app = new Vue({
//     el: '#app',
// });
require('./bootstrap');

//Load Screen
// window.onload = function() {
//     setTimeout(function() {
//         $('#load-screen').removeClass('active');
//     }, 800);
//
// };

$('#load-screen').removeClass('active');

//Slideshow control
// if(window.location)

//next
$('.next').click(function() {
    let currentElem = $('.slideshow-wrapper .photo.active');
    let nextElem = currentElem.next();
    //if there are more images

    console.log(nextElem);
    if(nextElem) {
        currentElem.removeClass('active');
        currentElem.next().addClass('active');
    }

});

$('#fullscreen-btn').click(function() {
    $('#photo-block').addClass('fullscreen');
});


//prev
$('.prev').click(function() {
    let currentElem = $('.slideshow-wrapper .photo.active');

    //if there are more images
    currentElem.removeClass('active');
    currentElem.prev().addClass('active');
});




$('#mobile-nav-btn').click(function() {
    $('#mobile-menu').removeClass('hidden');
});

$('#mobile-menu .close-btn').click(function() {
    $('#mobile-menu').addClass('hidden');
});


//Viewer
$('#viewer-menu-btn').click(function() {
    $('#viewer-menu-wrapper').removeClass('hidden');
});

$('#close-viewer-menu').click(function() {
    $('#viewer-menu-wrapper').addClass('hidden');
});

$('#white-box').click(function() {
    $('#viewer').css('background','white');
    $('.box').removeClass('active');
    $(this).addClass('active');
});

$('#black-box').click(function() {
    $('#viewer').css('background','black');
    $('.box').removeClass('active');
    $(this).addClass('active');
});




