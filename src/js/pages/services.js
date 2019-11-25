// Animate SVGs
import Vivus from 'vivus';

function servicesPage() {
    var svgs = document.getElementById('content').querySelectorAll('svg');

    svgs.forEach(function(el) {
        new Vivus(el, {duration: 200});
    })


    $(document).on('aos:in:step-item', function() {
        $('.step-item').each(function(){
            var $value = $(this).find('.value');
            var dataperc = $value.data('value');
            var $bar = $(this).find('.percent span');
    
            $value.countTo({
                from: 0,
                to: dataperc,
                speed: 500,
                refreshInterval: 100,
                formatter: function (value, options) {
                    return value.toFixed(options.decimals) + '%';
                },
                onUpdate: function (value) {
                    $bar.css('width', value + '%');
                }
            });
        });
    });
}

export {servicesPage};