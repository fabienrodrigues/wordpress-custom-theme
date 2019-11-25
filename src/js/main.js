// IMPORT UTILS
var utils = require('./components/_utils');
var header = require('./components/_header');
var footer = require('./components/_footerSocials');
var functions = require('./components/_functions');

import {homePage} from './pages/home';
import {aboutPage} from './pages/about';
import {contactsPage} from './pages/contacts';
import {servicesPage} from './pages/services';
import {singleProjectPage} from './pages/single-project';

// Animate on scroll
import AOS from 'aos';

// LazyLoad images
import LazyLoad from "vanilla-lazyload";

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'slick-carousel/slick/slick.min';


var dragging = false;


// ----------------------------------- DOCUMENT READY -----------------------------------
// --------------------------------------------------------------------------------------
$(document).ready(function () {
    // --- INIT FUNCTIONS ---
    utils.checkDevice();

    footer.moveFooterSocials();

    
    //FastClick.attach(document.body);
    
    // LAZY LOAD IMGS
    var myLazyLoad = new LazyLoad({ elements_selector: 'img' });


    // INIT CAROUSELS
    $('.carousel').slick();


    // PADDING TOP ON BODY
    functions.bodyPadding();
    
    
    // --- ACTIONS ---
    // ON RESIZE
    window.onresize = functions.windowResize;


    // SWITCH MENU MOBILE
    $("body").on("touchmove", function() {
        dragging = true;
    });


    $("body").on("touchstart", function() {
        dragging = false;
    });


    $('#header .navbar-toggle').on('touchend, click', function(e) {
        if(dragging) return;

        header.switchMenu();

        e.preventDefault();
    });


    // HEADER : ON SCROLL, SET SMALL CLASS
    header.headerScroll($(window).scrollTop());

    $(window).on('scroll', function() {
        var windowScroll = $(window).scrollTop();

        header.headerScroll(windowScroll);
    });
});
    
    
$(window).on('load', function() {
    document.body.classList.add('loaded');


    // SCRIPTS FOR PAGES
    if(document.getElementsByTagName('body')[0].classList.contains('home')) {
        homePage();
    }

    if(document.getElementsByTagName('body')[0].classList.contains('page-template-page-about')) {
        aboutPage();
    }
    
    if(document.getElementsByTagName('body')[0].classList.contains('page-template-page-contacts')) {
        contactsPage();
    }
    
    if(document.getElementsByTagName('body')[0].classList.contains('page-template-page-services')) {
        servicesPage();
    }
    
    if(document.getElementsByTagName('body')[0].classList.contains('single-projects')) {
        singleProjectPage();
    }

    setTimeout(() => {
        AOS.init({once:true});
    }, 200);
});