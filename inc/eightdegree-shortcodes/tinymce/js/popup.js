
// start the popup specefic scripts
// safe to use $
jQuery(document).ready(function($) {
    var zoos = {
    	loadVals: function()
    	{
    		var shortcode = $('#_eightdegree_shortcode').text(),
    			uShortcode = shortcode;
    		
    		// fill in the gaps eg {{param}}
    		$('.eightdegree-input').each(function() {
    			var input = $(this),
    				id = input.attr('id'),
    				id = id.replace('eightdegree_', ''),		// gets rid of the eightdegree_ prefix
    				re = new RegExp("{{"+id+"}}","g");
    				
    			uShortcode = uShortcode.replace(re, input.val());
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_eightdegree_ushortcode').remove();
    		$('#eightdegree-sc-form-table').prepend('<div id="_eightdegree_ushortcode" class="hidden">' + uShortcode + '</div>');
    	},
    	cLoadVals: function()
    	{
    		var shortcode = $('#_eightdegree_cshortcode').text(),
    			pShortcode = '';
    			shortcodes = '';
    		
    		// fill in the gaps eg {{param}}
    		$('.child-clone-row').each(function() {
    			var row = $(this),
    				rShortcode = shortcode;
    			
    			$('.eightdegree-cinput', this).each(function() {
    				var input = $(this),
    					id = input.attr('id'),
    					id = id.replace('eightdegree_', '')		// gets rid of the eightdegree_ prefix
    					re = new RegExp("{{"+id+"}}","g");
    					
    				rShortcode = rShortcode.replace(re, input.val());
    			});
    	
    			shortcodes = shortcodes + rShortcode + "\n";
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_eightdegree_cshortcodes').remove();
    		$('.child-clone-rows').prepend('<div id="_eightdegree_cshortcodes" class="hidden">' + shortcodes + '</div>');
    		
    		// add to parent shortcode
    		this.loadVals();
    		pShortcode = $('#_eightdegree_ushortcode').text().replace('{{child_shortcode}}', shortcodes);
    		
    		// add updated parent shortcode
    		$('#_eightdegree_ushortcode').remove();
    		$('#eightdegree-sc-form-table').prepend('<div id="_eightdegree_ushortcode" class="hidden">' + pShortcode + '</div>');
    	},
    	children: function()
    	{
    		// assign the cloning plugin
    		$('.child-clone-rows').appendo({
    			subSelect: '> div.child-clone-row:last-child',
    			allowDelete: false,
    			focusFirst: false
    		});
    		
    		// remove button
    		$('.child-clone-row-remove').live('click', function() {
    			var	btn = $(this),
    				row = btn.parent();
    			
    			if( $('.child-clone-row').size() > 1 )
    			{
    				row.remove();
    			}
    			else
    			{
    				alert('You need a minimum of one row');
    			}
    			
    			return false;
    		});
    		
    		// assign jUI sortable
    		$( ".child-clone-rows" ).sortable({
				placeholder: "sortable-placeholder",
				items: '.child-clone-row'
				
			});
    	},
    	resizeTB: function()
    	{
			var	ajaxCont = $('#TB_ajaxContent'),
				tbWindow = $('#TB_window'),
				eightdegreePopup = $('#eightdegree-popup');

            tbWindow.css({
                height: eightdegreePopup.outerHeight() + 50,
                width: eightdegreePopup.outerWidth(),
                marginLeft: -(eightdegreePopup.outerWidth()/2)
            });

			ajaxCont.css({
				paddingTop: 0,
				paddingLeft: 0,
				paddingRight: 0,
				height: (tbWindow.outerHeight()-47),
				overflow: 'auto', // IMPORTANT
				width: eightdegreePopup.outerWidth()
			});
			
			$('#eightdegree-popup').addClass('no_preview');
    	},
    	load: function()
    	{
    		var	zoos = this,
    			popup = $('#eightdegree-popup'),
    			form = $('#eightdegree-sc-form', popup),
    			shortcode = $('#_eightdegree_shortcode', form).text(),
    			popupType = $('#_eightdegree_popup', form).text(),
    			uShortcode = '';
    		
    		// resize TB
    		zoos.resizeTB();
    		$(window).resize(function() { zoos.resizeTB() });
    		
    		// initialise
    		zoos.loadVals();
    		zoos.children();
    		zoos.cLoadVals();
    		
    		// update on children value change
    		$('.eightdegree-cinput', form).live('change', function() {
    			zoos.cLoadVals();
    		});
    		
    		// update on value change
    		$('.eightdegree-input', form).change(function() {
    			zoos.loadVals();
    		});
    		
    		// when insert is clicked
    		$('.eightdegree-insert', form).click(function() {    		 			

                if(parent.tinymce){                
                    parent.tinymce.activeEditor.execCommand('mceInsertContent',false,$('#_eightdegree_ushortcode', form).html());
                    tb_remove();
                }
    		});

            // Sliders
            // --------------------------------------------------------------------------
            
            $( "#slider_eightdegree_start" ).slider({
            step: 1,
            min: -1000,
            max: 1000,
            range:'min',
                slide: function( event, ui ) { 
                    $( "#eightdegree_start" ).val(ui.value);
                    zoos.loadVals();
                }
            });
            $( "#slider_eightdegree_end" ).slider({
            step: 1,
            min: -1000,
            max: 1000,
            range:'min',
                slide: function( event, ui ) { 
                    $( "#eightdegree_end" ).val(ui.value);
                    zoos.loadVals();

                }
            });

            $( "#slider_eightdegree_fromTop, #slider_eightdegree_fromLeft" ).slider({
                step: 1,
                min: -1000,
                max: 1000,
                range:'min',
                slide: refreshFromStyle,
                change: refreshFromStyle
            });

            $( "#slider_eightdegree_fromOpacity" ).slider({
                step: 0.1,
                min: 0,
                max: 1,
                range:'min',
                slide: refreshFromStyle,
                change: refreshFromStyle
            });

            $( "#slider_eightdegree_toTop, #slider_eightdegree_toLeft" ).slider({
                step: 1,
                min: -1000,
                max: 1000,
                range:'min',
                slide: refreshtoStyle,
                change: refreshtoStyle
            });
                      
            $( "#slider_eightdegree_toOpacity" ).slider({
                step: 0.1,
                min: 0,
                max: 1,
                range:'min',
                slide: refreshtoStyle,
                change: refreshtoStyle
            });

            $( "#slider_eightdegree_fromRed, #slider_eightdegree_fromGreen, #slider_eightdegree_fromBlue" ).slider({
                step: 1,
                min: 0,
                max: 255,
                value:0,
                range:'min',
                slide: refreshfromColor,
                change: refreshfromColor
            });
            $( "#slider_eightdegree_toRed, #slider_eightdegree_toGreen, #slider_eightdegree_toBlue" ).slider({
                step: 1,
                min: 0,
                max: 255,
                value:255,
                range:'min',
                slide: refreshtoColor,
                change: refreshtoColor
            });
    

            function refreshFromStyle() {
                var fromOpacity = '', fromTop = '', fromLeft = '';
                
                if($( "#slider_eightdegree_fromOpacity" ).slider( "value" ) != '' ) {
                  fromOpacity = 'opacity: ' + $( "#slider_eightdegree_fromOpacity" ).slider( "value" ) + ' ; ';
                }
                if($( "#slider_eightdegree_fromTop" ).slider( "value" ) != '') {
                  fromTop = 'top: ' + $( "#slider_eightdegree_fromTop" ).slider( "value" ) + 'px; ';
                }
                if($( "#slider_eightdegree_fromLeft" ).slider( "value" ) != '') {
                  fromLeft = 'left: ' + $( "#slider_eightdegree_fromLeft" ).slider( "value" ) + 'px; ';
                }
                
                $( "#eightdegree_fromStyle" ).val(fromOpacity + fromTop + fromLeft);
                
                zoos.loadVals();
            }

            function refreshtoStyle() {
                var toOpacity = '', toTop = '', toLeft = '';
                
                if($( "#slider_eightdegree_toOpacity" ).slider( "value" ) != '' ) {
                  toOpacity = 'opacity: ' + $( "#slider_eightdegree_toOpacity" ).slider( "value" ) + ' ; ';
                }
                if($( "#slider_eightdegree_toTop" ).slider( "value" ) != '') {
                  toTop = 'top: ' + $( "#slider_eightdegree_toTop" ).slider( "value" ) + 'px; ';
                }
                if($( "#slider_eightdegree_toLeft" ).slider( "value" ) != '') {
                  toLeft = 'left: ' + $( "#slider_eightdegree_toLeft" ).slider( "value" ) + 'px; ';
                }
           
                $( "#eightdegree_toStyle" ).val(toOpacity + toTop + toLeft);
                
                zoos.loadVals();
            }

            function refreshfromColor() {
                //var toOpacity = '', toTop = '', toLeft = '';
                var fromRed = $( "#slider_eightdegree_fromRed" ).slider( "value" ),
                fromGreen = $( "#slider_eightdegree_fromGreen" ).slider( "value" ),
                fromBlue = $( "#slider_eightdegree_fromBlue" ).slider( "value" );

           
                $( "#eightdegree_fromColor" ).val('rgb('+ fromRed + ',' + fromGreen + ',' + fromBlue + ')');
                $( "#swatch_eightdegree_fromColor" ).css('background-color', $( "#eightdegree_fromColor" ).val()) ;
              
                zoos.loadVals();
            } 
             function refreshtoColor() {

                var toRed = $( "#slider_eightdegree_toRed" ).slider( "value" ),
                toGreen = $( "#slider_eightdegree_toGreen" ).slider( "value" ),
                toBlue = $( "#slider_eightdegree_toBlue" ).slider( "value" );

           
                $( "#eightdegree_toColor" ).val('rgb('+ toRed + ',' + toGreen + ',' + toBlue + ')');
                $( "#swatch_eightdegree_toColor" ).css('background-color', $( "#eightdegree_toColor" ).val()) ;
              
                zoos.loadVals();
            }                 

    	    
            // --------------------------------------------------------------------------
        }
	}
    
    // run
    $('#eightdegree-popup').livequery( function() { zoos.load(); } );

});