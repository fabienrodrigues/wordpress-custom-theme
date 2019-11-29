/* --- UTILISATION ---
	import {HeaderClass} from './components/_header';

	// INIT HEADER
    let header = new HeaderClass();
    header.initHeader();
*/


export class HeaderClass {
	// constructor
	constructor(isForceScrolled = false) {
		this.windowScroll = 0;
		this.header = document.getElementById('header');
		this.isScrolled = false;
		this.isForceScrolled = isForceScrolled;
	}

	switchMenu() {
		if (document.getElementById('header').classList.contains('open')) {
			
			this.closeMenu(false);
	
		} else {
	
			this.openMenu();
	
		}
	
		return false;
	}

	openMenu() {
		document.getElementById('header').classList.add('open');
	
		setTimeout(function() {	
			$('#header .filter').on('touchmove',function(e) {
				e.preventDefault();
			});
		}, 250);
	}

	closeMenu() {
		this.header.classList.remove('open');
	}

	addScrolled() {
		this.header.classList.add('scrolled');
		this.isScrolled = true;
	}

	removeScrolled() {
		this.header.classList.remove('scrolled');
		this.isScrolled = false;
	}

	headerScroll(windowScroll) {
		var self = this;
		let headerHeight = self.header.offsetHeight;
		
		if(Math.abs(windowScroll) >= headerHeight) {

			if(!self.isScrolled) {
				self.addScrolled();
			}
			
		} else {
			
			if(self.isScrolled) {
				self.removeScrolled();
			}

			if(self.isScrolled && !self.isForceScrolled ) {
				self.removeScrolled();
			}
	
			if(self.isForceScrolled) {
				self.addScrolled();
			}
			
		}
	}


	initHeader() {
		let self = this;
		let dragging = false;
		self.headerScroll($(window).scrollTop());

		if(self.isForceScrolled) {
			self.header.classList.add('forced');
		}

		// HEADER ON SCROLL
		$(window).on('scroll', function() {
			self.headerScroll($(window).scrollTop());
		});


		// SWITCH MENU MOBILE
		$("body").on("touchmove", function() {
			dragging = true;
		}).on("touchstart", function() {
			dragging = false;
		});


		$('#header .navbar-toggle, #header .filter').on('touchend, click', function(e) {
			if(dragging) return;
	
			Header.switchMenu();
	
			e.preventDefault();
		});


		window.onresize = self.closeMenu;
	}
}