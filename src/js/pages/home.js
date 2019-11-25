// Mixitup (portfolio grid filter)
import mixitup from 'mixitup';

// Typed.js (type string effect)
import Typed from 'typed.js';

import AOS from 'aos';

function homePage() {
    // MIXITUP
    var mixer = mixitup('#portfolio-content', {
        selectors: {
            target: '.portfolio-item'
        },
        callbacks: {
            onMixEnd: function() {
                AOS.refresh();
           }
        }
    });

    var filterSelect = document.getElementById('filter-select');
    filterSelect.addEventListener('change', function() {
        var selector = filterSelect.value;

        mixer.filter(selector);

        AOS.refresh();
    });

    // TYPED STRINGS
    var typed = new Typed('.typed-container', {
        stringsElement: '.typed-strings',
        typeSpeed: 40,
        backDelay: 2000,
        loop: true
    });
}

export {homePage};