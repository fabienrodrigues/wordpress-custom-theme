let utils = require('./_utils');


/* --- UTILISATION --- 
    import {ItemsHeight} from '../components/_sameItemsHeight';
    
    let itemsHeight = new ItemsHeight(document.querySelectorAll('.items'));
    itemsHeight.setHeights();

    pageResize.push(itemsHeight.setHeights);
*/


//SET THE SAME HEIGHT FOR JOB ITEMS
export class ItemsHeight {
	// constructor
	constructor(items) {
		this.heightArray = [];
		this.maxHeight = 0;
        this.nbItems = 0;
        this.items = items;
	}

	setHeights() {
        var self = this;
        if(utils.getDeviceKind() !== 'isMobile') {
            
            self.nbItems = self.items.length;
            
            self.items.forEach(function(el, index) {
                el.style.height = 'auto';
                let heightItem = el.offsetHeight;
                self.heightArray.push(heightItem);
        
                if( (index + 1) >= self.nbItems) {
                    self.maxHeight = Math.max.apply( Math, self.heightArray );
    
                    self.items.forEach(function(el) {
                        el.style.height = self.maxHeight + 'px';
                    });
                
                    self.heightArray = [];
                }
            });
    
        } else {
    
            self.items.forEach(function(el) {
                el.style.height = 'auto';
            });
    
        }
    }
}