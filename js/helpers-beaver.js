(function($) {

	function beaverVidbg() {

		$('.fl-bg-video > video').each(function() {
			
			var vow = $(this).attr('data-width'),
			voh = $(this).attr('data-height'),
			vratio = parseInt( vow ) / parseInt( voh ), //.5625
			pratio = parseInt( $(this).parent().width() )/ parseInt( $(this).parent().height() ); //.3248
			
			var tc = $(this).closest('.fl-row-content-wrap'),
			pc = $(this).parent();							
				
			$( this ).removeAttr('style');				
				
			var tcw = $(tc).width(),
			tch = $(tc).height(),
			pcw = $(pc).width(),
			pch = $(pc).height();
			
			//If top parent is narrower than the original video width
			if( tcw < vow ) {
				
				var nh = tch,
				nw = nh * vratio;
				
				//Special case: if the new video is narrower than the screen width!!!
				if ( nw < $(window).width() ) {
					var nh = tch * vratio,
					nw = nh * vratio;						
				}
				
			//If top parent is wider or equal to the original video width	
			} else {
				var nh = tcw/vratio,
				nw = $(window).width();				
			}
			
			$(tc).css({overflow: 'hidden', position: 'relative'});
			$(pc).attr('style', 'height: ' + nh + 'px; left: 50%!important; width: ' + nw + 'px!important; margin-left: -' + nw/2 + 'px;');
			$(this).attr('style', 'height: ' + nh + 'px!important;');				

		})
		
	}
			
	$(window).load(function() {								
		
		beaverVidbg();
		
	});
			
	$(window).resize(function(){
		
		beaverVidbg();
		
	});	
	$( document ).ready(function() {
	$('.fl-builder-modules-cta').html('<a href="#" onclick="window.open(\'http://tesseracttheme.com/plus/\');" target="_blank"><i class="fa fa-external-link-square"></i> Get more time-saving features, modules, and expert support.</a>');
	 
	});
    jQuery( document ).ready(function() {	
	jQuery('.fl-builder-templates-button').hide();
	  setTimeout(function(){
	   jQuery('.fl-template-selector').hide();
	   jQuery('.fl-template-selector').closest('.fl-builder-settings-lightbox').hide();
	},300);
	});
})(jQuery);


 
