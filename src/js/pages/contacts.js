// ICI IMPORT DES VENDORS NECESSAIRES
// --> <--


// ICI LE SCRIPT DE LA PAGE
let contactsPage = {
    // execute in document.ready
    readyFn : function() {
        
    },

    // execute in window.load
    loadFn : function() {
        $('.contacts-block textarea, .contacts-block input[type!="submit"]')
            .on('focus', function() {
                $(this).parents('label').addClass('focus');
            })
            .on('blur', function() {
                var $self = $(this);

                $self.parents('label').removeClass('focus');

                if($self.val() != '') {
                    $self.parents('label').addClass('fill');
                }
            });
    }
}


if(document.getElementsByTagName('body')[0].classList.contains('page-template-page-contacts')) {
    document.addEventListener("DOMContentLoaded", function() {
        contactsPage.readyFn();
    });


    $(window).on('load', function() {
        contactsPage.loadFn();
    });
}