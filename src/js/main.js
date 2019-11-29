// IMPORT UTILS
var utils = require('./components/_utils');
var bodyElm = require('./components/_bodyPaddingTop');
var functions = require('./components/_functions');

import {HeaderClass} from './components/_header';


import $ from 'jquery';
window.$ = window.jQuery = $;


// ----------------------------------- DOCUMENT READY -----------------------------------
// --------------------------------------------------------------------------------------
$(document).ready(function () {
    // --- INIT FUNCTIONS ---
    utils.checkDevice();

    // PADDING TOP ON BODY
    bodyElm.bodyPadding();

    // INIT HEADER
    let header = new HeaderClass();
    header.initHeader();
    
    
    // --- ACTIONS ---
    // ON RESIZE
    window.onresize = functions.windowResize;
});
    
    
$(window).on('load', function() {
    document.body.classList.add('loaded');
});