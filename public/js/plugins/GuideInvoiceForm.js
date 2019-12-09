// Utility
if ( typeof Object.create !== 'function' ) {
	Object.create = function( obj ) {
		function F() {};
		F.prototype = obj;
		return new F();
	};
}

(function( $, window, document, undefined ) {

	var GuideInvoiceForm = {
		init: function (options, elem) {
			var self = this;

            self.$form = $(elem);

            
        }
	}
	$.fn.GuideInvoiceForm = function( options ) {
		return this.each(function() {
			var $this = Object.create( GuideInvoiceForm );
			$this.init( options, this );
			$.data( this, 'GuideInvoiceForm', $this );
		});
	};
	$.fn.GuideInvoiceForm.defaults = {
		loadThrottle: 300,
	}
	

})( jQuery, window, document );
	