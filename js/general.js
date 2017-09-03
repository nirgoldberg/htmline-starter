var $ = jQuery,
	HTMLine_starter_general = {

		/**
		 * Params
		 */
		params : {

			window_width	: 0,	// Client window width - used to maintain window resize events (int)
			breakpoint		: '',	// CSS media query breakpoint (int)
			prev_breakpoint	: '',	// Previous media query breakpoint (int)
			timeout			: 400,	// General timeout (int)

		},

		/**
		 * init
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		init : function() {

			// jQuery extentions
			$.fn.setAllToMaxHeight = function() {
				// return
				return this.height( Math.max.apply(this, $.map(this, function(e) { return $(e).height() })) );
			}

			// Embedded video - responsive treatment
			$('.page-content').find('iframe, object, embed').each(function() {
				if ( $(this).hasClass('no-flex') )
					return;

				$(this).wrap("<div class='flex-video'></div>");
			});
		},

		/**
		 * breakpoint_refreshValue
		 *
		 * Set window breakpoint values
		 * Called from loaded/alignments
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		breakpoint_refreshValue : function() {

			var new_breakpoint = window.getComputedStyle(
				document.querySelector('body'), ':before'
			).getPropertyValue('content').replace(/\"/g, '').replace(/\'/g, '');

			HTMLine_starter_general.params.prev_breakpoint = HTMLine_starter_general.params.breakpoint;
			HTMLine_starter_general.params.breakpoint = new_breakpoint;

		},

		/**
		 * loaded
		 *
		 * Called by $(window).load event
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		loaded : function() {

			HTMLine_starter_general.params.window_width = $(window).width();
			$(window).resize(function() {
				if ( HTMLine_starter_general.params.window_width != $(window).width() ) {
					HTMLine_starter_general.alignments();
					HTMLine_starter_general.params.window_width = $(window).width();
				}
			});

			HTMLine_starter_general.alignments();

		},

		/**
		 * alignments
		 *
		 * Align components after window resize event
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		alignments : function() {

			// Set window breakpoint values
			HTMLine_starter_general.breakpoint_refreshValue();

		}

	};

// Make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

$(HTMLine_starter_general.init);
$(window).load(HTMLine_starter_general.loaded);