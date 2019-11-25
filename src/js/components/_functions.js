var utils = require('../components/_utils');
var header = require('../components/_header');


module.exports.bodyPadding = function(){
    let headerHeight = document.getElementById('header').offsetHeight;
    let body = document.getElementsByTagName('body')[0];

    body.style.paddingTop = headerHeight + 'px';
};


// --- WINDOW RESIZE ---
var rtime;
var timeout = false;
var delta = 100;

if (!Array.isArray(window.pageResize)) {
	window.pageResize = [];
}

module.exports.windowResize = function() {
    rtime = new Date();

    if (timeout === false) {
        timeout = true;
        setTimeout(resizeend, delta);
    }

	if(utils.getDeviceKind() !== 'isMobile') {
		header.closeMenu();
	}
};


resizeend = () => {
    if (new Date() - rtime < delta) {

        setTimeout(resizeend, delta);

    } else {

        timeout = false;

        utils.checkDevice();
        
        try {
			for (var i in pageResize) {
				pageResize[i]();
			}
		}
		catch(e) {}

    }               
}