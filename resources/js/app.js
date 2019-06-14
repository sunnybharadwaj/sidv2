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
window.onload = function() {
    setTimeout(function() {
        $('#load-screen').removeClass('active');
    }, 800);

};

$('#mobile-nav-btn').click(function() {
    $('#mobile-menu').removeClass('hidden');
});

$('#mobile-menu .close-btn').click(function() {
    $('#mobile-menu').addClass('hidden');
});


$('#add-tag').click(function () {
    $(this).remove();
    $('#add-tags').removeClass('hidden');
});

$('#another-tag').click(function () {
    let elem = $.parseHTML("<input type=\"text\" name=\"newtags[]\" class=\"another-tag block blueprint mb-2\" placeholder=\"Tag\"> <div class=\"mb-2\"></div>");

    $('#tag-inputs').append(elem);
});


$('#photo_hd').change(function () {
    let fileName = $('#photo_hd').val().split('\\');
    fileName = fileName[fileName.length - 1];
    if(!fileName) {
        fileName = "Click here to upload"
    }
    $(this).prev('label').removeClass('labeled').text(fileName);
});

$('#photo_sd').change(function () {
    let fileName = $('#photo_sd').val().split('\\');
    fileName = fileName[fileName.length - 1];
    $(this).prev('label').removeClass('labeled').text(fileName);
});

$('#thumbnail_url').change(function() {
    let fileName = $('#thumbnail_url').val().split('\\');
    fileName = fileName[fileName.length - 1];
    $(this).prev('label').removeClass('labeled').text(fileName);
});

$('.item').click(function() {
    $(this).children('.full-page-bg').toggleClass('hidden');
});







