(function() {
	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx(el);
	} );
})();

$('.cs-select').change(function(){
	console.log('changed');
	$(this).parent().submit();
});