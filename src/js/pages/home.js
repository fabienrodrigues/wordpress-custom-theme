// ICI IMPORT DES VENDORS NECESSAIRES
// --> <--

// ICI LE SCRIPT DE LA PAGE
let homePage = {
    // execute in document.ready
    readyFn : function() {
        console.log('homePage.readyFn');
    },

    // execute in window.load
    loadFn : function() {
        console.log('homePage.loadFn');
    }
}


if(document.getElementsByTagName('body')[0].classList.contains('home')) {
    document.addEventListener("DOMContentLoaded", function() {
        homePage.readyFn();
    });


    $(window).on('load', function() {
        homePage.loadFn();
    });
}