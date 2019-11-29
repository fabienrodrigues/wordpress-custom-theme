var utils = require('../components/_utils');
var header = require('../components/_header');


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