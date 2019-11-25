
// --- MENU ---
module.exports = {
	switchMenu : function () {
		if (document.getElementById('header').classList.contains('open')) {
			
			this.closeMenu(false);
	
		} else {
	
			this.openMenu();
	
		}
	
		return false;
	},

	openMenu : function () {
		document.getElementById('header').classList.add('open');
	
		setTimeout(function() {	
			$('#header .filter').on('touchmove',function(e) {
				e.preventDefault();
			});
		}, 250);
	},

	closeMenu : function () {
		document.getElementById('header').classList.remove('open');
	},

	
	headerScroll : function(windowScroll) {
		let header = document.getElementById('header');
		let headerHeight = header.offsetHeight;
		
		if(Math.abs(windowScroll) >= headerHeight) {

			if(!this.headerState.isScrolled) {
				this.headerState.scrolled();
			}
			
		} else {
			
			if(this.headerState.isScrolled) {
				this.headerState.notScrolled();
			}
			
		}
	},

	headerState : {
		header : document.getElementById('header'),
		isScrolled: false,
		scrolled : function() {
			this.header.classList.add('scrolled');
			this.isScrolled = true;
		},
		notScrolled : function() {
			this.header.classList.remove('scrolled');
			this.isScrolled = false;
		}
	}
}