jQuery(document).ready(function($) {											

	$("#accordion-panel-tesseract_social > ul > li > h3:contains('Social Account')").css('color', '#999');
	
	  
	//$("[data-customize-setting-link=tesseract_header_layout_setting]").css("background-color", "yellow");
	//Header Layout//////
 	$('select[data-customize-setting-link="tesseract_header_layout_setting"]').change(function(){
		 if(this.value=='centered-inline-logo')
		 {//alert(this.value);
		 }
	     else{}
		 }
         );
} )