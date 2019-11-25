var utils = require('../components/_utils');
import countTo from 'jquery-countto/jquery.countTo';

function aboutPage() {
    // ADD AOS ON FIRST WYSIWYG ELEMENTS
    var column = document.getElementById('content').querySelectorAll('.main-column')[0];
    var els = column.querySelectorAll('h1, h3, .main-content');

    els.forEach(function(el, index) {
        el.setAttribute('data-aos', 'fade-up');
        el.setAttribute('data-aos-anchor-placement', 'top-bottom');
        el.setAttribute('data-aos-delay', index*100);
    });
    
    
    // ANIMATE NUMBERS
    $(document).on('aos:in:numbers', function() {
        $('.number-item').each(function(){
            var $number = $(this).find('.number');
            var dataperc = $number.data('value');
    
            $number.countTo({
                from: 0,
                to: dataperc,
                speed: 1500,
                refreshInterval: 100
            });
        });
    });
    
    
    //SET THE SAME HEIGHT FOR JOB ITEMS
    var articlesHeight = {
        heightArray : [],
        items : document.querySelector('.team-wrapper').querySelectorAll('.job-item'),
        maxHeight : 0,
        nbItems : 0,
        setHeights : function () {
            if(utils.getDeviceKind() !== 'isMobile') {
                
                var self = articlesHeight;
        
                self.nbItems = self.items.length;
                
                self.items.forEach(function(el, index) {
                    el.style.height = 'auto';
                    var heightItem = el.offsetHeight;
                    self.heightArray.push(heightItem);
            
                    if( (index + 1) >= self.nbItems) {
                        self.maxHeight = Math.max.apply( Math, self.heightArray);
        
                        self.items.forEach(function(el) {
                            el.style.height = self.maxHeight + 'px';
                        });
                    
                        self.heightArray = [];
                    }
                });
        
            } else {
        
                this.items.forEach(function(el) {
                    el.style.height = 'auto';
                });
        
            }
        }
    };

    articlesHeight.setHeights();
    
    pageResize.push(articlesHeight.setHeights);
}


export {aboutPage};