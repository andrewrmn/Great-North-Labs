'use strict';

const $ = require('jquery');

class Tabs {

	constructor( options ) {

		//setup any defaults
		this.defaults = {};

		//merge options with defaults
		this.settings = $.extend( true, {}, this.defaults, options );

		if( $('.tabs').length ) {
			this.events();
        } else {
            return;
        }
	}


	events() {

		var tab = $('.tab'),
			tabTab = $('.tab-tab'),
        	activeTab = $('.tab-tab.is-active');

		tabTab.click(function(){
			var par = $(this).parent('.tab'),
				group = par.parent('.tabs');

			group.addClass('user-clicked');

			if( !par.hasClass('is-active') ){
				group.find('.tab').removeClass('is-active');
				par.addClass('is-active');
			}
		});

		function rotateTabs() {
			$('.tabs').each(function(){
				var active = $(this).find('.tab.is-active'),
					first = $(this).find('.tab.first-tab'),
					next = $(this).find('.tab.is-active').next('.tab');

				active.removeClass('is-active');

				if ( active.next('.tab').length == 0) {
					first.addClass('is-active');
				} else {
					next.addClass('is-active');
				}
			});
		}

		setInterval(function() {
			if( !$('.tabs').hasClass('user-clicked')){
				//rotateTabs();
			}
		}, 3000);
	}
}

module.exports = Tabs;
