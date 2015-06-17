(function($) {
"use strict";   
 
			
 			//Shortcodes
            tinymce.PluginManager.add( 'eightdegreeShortcodes', function( editor, url ) {
				
				editor.addCommand("eightdegreePopup", function ( a, params )
				{
					var popup = params.identifier;
					tb_show("Insert EightDegree Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
				});
     
                editor.addButton( 'eightdegree_button', {
                    type: 'splitbutton',
                    icon: false,
					title:  'EightDegree Shortcodes',
					onclick : function(e) {},
					menu: [
						
						{text: 'Columns',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Columns',identifier: 'columns'})
						}},
						{text: 'Button',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Button',identifier: 'button'})
						}},
						{text: 'Icon Box',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Icon Box',identifier: 'iconBox'})
						}},
						{text: 'Pricing Table',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Pricing Table',identifier: 'pricingTable'})
						}},
						{text: 'Skill Rating Bar',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Skill Rating Bar',identifier: 'skill'})
						}},
						{text: 'Counter',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Counter',identifier: 'counter'})
						}},
						{text: 'Scroll Animation',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Scroll Animation',identifier: 'scrollAnimation'})
						}},
						{text: 'CSS Animation',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'CSS Animation',identifier: 'cssAnimation'})
						}},
						{text: 'Recent Posts',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Recent Posts',identifier: 'recentPosts'})
						}},
						{text: 'Parallax Section',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Parallax Section',identifier: 'parallaxSection'})
						}},
						{text: 'Colored Parallax Section',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Colored Parallax Section',identifier: 'coloredParallaxSection'})
						}},
						{text: 'Parallax Background',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Parallax Background',identifier: 'parallaxBackground'})
						}},
						{text: 'Tabbed Page',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Tabbed Page',identifier: 'tabbedPage'})
						}},
						{text: 'Testimonials Slider',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Testimonials Slider',identifier: 'testimonialsSlider'})
						}},
						{text: 'Clients Slider',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Clients Slider',identifier: 'clientsSlider'})
						}},
						{text: 'Text Ticker',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Text Ticker',identifier: 'textTicker'})
						}},
						{text: 'Social Networks', onclick : function() {
						    tinymce.execCommand('mceInsertContent', false, '[social_networks]');
						}},
						{text: 'Team',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Team',identifier: 'team'})
						}},
						{text: 'Flex Slider',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Flex Slider',identifier: 'flexSlider'})
						}},
						{text: 'SuperSlides', onclick : function() {
						    tinymce.execCommand('mceInsertContent', false, '[super_slides]');
						}},
						{text: 'Portfolio', onclick : function() {
						    tinymce.execCommand('mceInsertContent', false, '[portfolio]');
						}},
						{text: 'Google Map',onclick:function(){
							editor.execCommand("eightdegreePopup", false, {title: 'Google Map',identifier: 'googleMap'})
						}},



					
					]
					
                
        	  });
         
          });
         

 
})(jQuery);

