(function ()
{
	// create eightdegreeShortcodes plugin
	tinymce.create("tinymce.plugins.eightdegreeShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("eightdegreePopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert eightdegree Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "eightdegree_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('eightdegree_button', {
                    title: "Insert eightdegree Shortcode",
					image: eightdegreeShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{					
					a.addWithPopup( b, "Columns", "columns" );
					a.addWithPopup( b, "Button", "button" );
					a.addWithPopup( b, "Icon Box", "iconBox" );
					a.addWithPopup( b, "Pricing Table", "pricingTable" );
					a.addWithPopup( b, "Skill Rating Bar", "skill" );
					a.addWithPopup( b, "Counter", "counter" );
					a.addWithPopup( b, "Scroll Animation", "scrollAnimation" );
					a.addWithPopup( b, "CSS Animation", "cssAnimation" );
					a.addWithPopup( b, "Recent Posts", "recentPosts" );
					a.addWithPopup( b, "Parallax Section", "parallaxSection" );
					a.addWithPopup( b, "Colored Parallax Section", "coloredParallaxSection" );
					a.addWithPopup( b, "Parallax Background", "parallaxBackground" );
					a.addWithPopup( b, "Tabbed Page", "tabbedPage" );
					a.addWithPopup( b, "Testimonials Slider", "testimonialsSlider" );
					a.addWithPopup( b, "Clients Slider", "clientsSlider" );
					a.addWithPopup( b, "Text Ticker", "textTicker" );
					a.addImmediate( b, "Social Networks", "[social_networks]" );
					a.addWithPopup( b, "Flex Slider", "flexSlider" );
					a.addWithPopup( b, "Team", "team" );
					a.addImmediate( b, "SuperSlides", "[super_slides]" );
					a.addImmediate( b, "Portfolio", "[portfolio]" );
					a.addWithPopup( b, "Google Map", "googleMap" );
				});
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("eightdegreePopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'eightdegree Shortcodes',
				author: 'Web Dingo',
				authorurl: 'http://www.webdingo.net',
				infourl: 'http://www.webdingo.net',
				version: "1.0"
			}
		}
	});
	
	// add eightdegreeShortcodes plugin
	tinymce.PluginManager.add("eightdegreeShortcodes", tinymce.plugins.eightdegreeShortcodes);
})();

