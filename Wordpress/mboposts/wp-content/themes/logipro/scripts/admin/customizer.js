( function( $ ){
	/*wp.customize('blogname',function( value ) {
		value.bind(function(to) {
			$('#site-title a').html(to);
		});
	});
	wp.customize('blogdescription',function( value ) {
		value.bind(function(to) {
			$('#site-description').html(to);
		});
	});
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			$('#site-title a, #site-description').css('color', to ? to : '' );
		});
	});*/
	wp.customize('ozy_logipro_use_custom_logo',function( value ) {
		value.bind(function(to) {
			//$('#site-description').html(to);
			//console.log(to);
		});
	});	
} )( jQuery )