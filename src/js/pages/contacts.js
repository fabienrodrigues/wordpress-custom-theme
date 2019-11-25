function contactsPage() {
    // ADD AOS ON FIRST WYSIWYG ELEMENTS
    var els = [];
    var column = document.getElementById('content');
    var blocks = column.querySelectorAll('.has-2-columns');
    
    els.push(column.querySelector('h1'));
    els.push(column.querySelector('h3'));
    els.push(document.getElementById('wpgmza_map'));

    blocks.forEach(function(el) {
        els.push(el);
    });


    els.forEach(function(el, index) {
        el.setAttribute('data-aos', 'fade-up');
        el.setAttribute('data-aos-anchor-placement', 'top-bottom');
        el.setAttribute('data-aos-delay', index*100);
    });


    $('.contacts-block textarea, .contacts-block input[type!="submit"]')
        .on('focus', function() {
            $(this).parents('label').addClass('focus');
        })
        .on('blur', function() {
            var $self = $(this);

            $self.parents('label').removeClass('focus');

            if($self.val() != '') {
                $self.parents('label').addClass('fill');

                console.log($(this).val());
            }
        });
    

    var contactsBloc = document.querySelector('.contacts-block');
    var bloc = contactsBloc.querySelectorAll('.wp-block-column')[0];
    var socials = document.getElementById('content').querySelector('.socials');

    if(bloc != null) {
        bloc.appendChild(socials);
    }
}


export {contactsPage};