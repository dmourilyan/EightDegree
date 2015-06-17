jQuery(document).ready(function(){
	
	jQuery('.eightdegree-opts-checkbox-hide-all').each(function(){
		if(!jQuery(this).is(':checked')){
			jQuery(this).closest('tr').nextAll('tr').hide();
		}
	});
	
	jQuery('.eightdegree-opts-checkbox-hide-all').click(function(){
			jQuery(this).closest('tr').nextAll('tr').fadeToggle('slow');
	});
	
});
