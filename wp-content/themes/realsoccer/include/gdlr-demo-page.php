<?php

	/*	

	*	Goodlayers Framework File

	*	---------------------------------------------------------------------

	*	This file contains the homepage loading button in page option area

	*	---------------------------------------------------------------------

	*/

	

	add_action('add_meta_boxes', 'gdlr_init_demo_page_option');

	if( !function_exists('gdlr_init_demo_page_option') ){

		function gdlr_init_demo_page_option(){

			add_meta_box( 'demo-page-option', 

				__('Load Demo Page', 'gdlr_translate'), 

				'gdlr_create_demo_page_option',

				'page',

				'side',

				'default'

			);

		}

	}

	

	if( !function_exists('gdlr_create_demo_page_option') ){

		function gdlr_create_demo_page_option(){

			global $post;

		

			$buttons = array(

				'homepage-1' => __('Homepage', 'gdlr_translate'),

				'pricing' => __('Pricing', 'gdlr_translate'),

				'contact-1' => __('Contact', 'gdlr_translate'),

			);

			

			echo '<div id="gdlr-load-demo-wrapper" data-ajax="' . AJAX_URL . '" data-id="' . $post->ID . '" data-action="load_demo_pagebuilder">';

			echo '<em>';

			echo __('*This option allow you to set page item to following pages with one click. Note that to use this option will replace all your current page item setting in this page and <strong>This Can\'t Be Undone</strong>. ( Images are not included. )', 'gdlr_translate');

			echo '</em><div class="clear"></div>';

			foreach( $buttons as $button_slug => $button_title ){

				echo '<input type="button" data-slug="' . $button_slug . '" value="' . $button_title . '" />';

			}

			echo '</div>';



		}

	}

	

	add_action('wp_ajax_load_demo_pagebuilder', 'gdlr_load_demo_pagebuilder');

	if( !function_exists('gdlr_load_demo_pagebuilder') ){

		function gdlr_load_demo_pagebuilder(){

			$default_data = array(

				'homepage-1' => array(

					'above-sidebar'=>'[]',

					'below-sidebar'=>'[]',

					'content-with-sidebar'=>'[{"item-type":"wrapper","item-builder-title":"Full Size Wrapper","type":"full-size-wrapper","items":[{"item-type":"item","item-builder-title":"Master Slider","type":"master-slider","option":{"page-item-id":"","id":"1","margin-bottom":"0px"}}],"option":{"page-item-id":"","background":"#ffffff","show-section":"gdlr-show-all","border":"none","border-top-color":"#e9e9e9","border-bottom-color":"#e9e9e9","padding-top":"0px","padding-bottom":"0px"}},{"item-type":"wrapper","item-builder-title":"Full Size Wrapper","type":"full-size-wrapper","items":[{"item-type":"item","item-builder-title":"Upcoming Match","type":"upcoming-match","option":{"page-item-id":"","category":"first-team-result","image-id":"","margin-bottom":"0px"}}],"option":{"page-item-id":"","background":"#ffffff","show-section":"gdlr-show-all","border":"top","border-top-color":"#842b2c","border-bottom-color":"#e9e9e9","padding-top":"0px","padding-bottom":"0px"}},{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-2","items":[{"item-type":"item","item-builder-title":"Banner With Divider","type":"banner-with-divider","option":{"page-item-id":"","column-no":"two","image-1":"3393","link-1":"http://goodlayers.com","image-2":"3394","link-2":"http://themes.goodlayers.com/realsoccer/woocommerce-shop/","image-3":"","link-3":"","margin-bottom":"55px"}},{"item-type":"item","item-builder-title":"Blog","type":"blog","option":{"page-item-id":"","title-type":"left","title":"Recent News","caption":"","right-text":"Read All News","right-text-link":"","category":"","tag":"","num-excerpt":"23","num-fetch":"3","blog-style":"blog-1-2","blog-layout":"fitRows","thumbnail-size":"post-slider-side","orderby":"date","order":"desc","offset":"","pagination":"disable","enable-sticky":"enable","margin-bottom":"20px"}}],"option":{},"size":"2/3"},{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-2","items":[{"item-type":"item","item-builder-title":"League Table","type":"league-table","option":{"page-item-id":"","title-type":"left","title":"League Table","caption":"","right-text":"Read All News","right-text-link":"","category":"first-league","style":"summary","num-display":"8","button-text":"View Full Table","button-link":"http://themes.goodlayers.com/realsoccer/league-table","margin-bottom":"60px"}},{"item-type":"item","item-builder-title":"Image / Frame","type":"image-frame","option":{"page-item-id":"","image-id":"3227","thumbnail-size":"full","link-type":"url","url":"http://themes.goodlayers.com/realsoccer/woocommerce-shop/","frame-type":"none","frame-background":"#dddddd","margin-bottom":"60px"}},{"item-type":"item","item-builder-title":"Twitter","type":"twitter","option":{"page-item-id":"","title-type":"left","title":"Twitter Feed","caption":"","right-text":"Read All News","right-text-link":"","twitter-name":"goodlayers_demo","show-num":"4","consumer-key":"wKopeDIlHw85713Q4iJRDg","consumer-secret":"2QMwxnQNg6OtMGDfPQ5aRM9hsG0rcnJQiZ7pQNpIk","access-token":"2407358941-Yn8YgQNF4DjwQoZR1uAoMWwWr4gYKlWDnqOqPzz","access-token-secret":"4tVAPHp1tUCsywnJzCyke6Mo0r52za4uXJk01ofeUgadw","cache-time":"1","margin-bottom":"60px"}}],"option":{},"size":"1/3"},{"item-type":"wrapper","item-builder-title":"Background/Parallax Wrapper","type":"parallax-bg-wrapper","items":[{"item-type":"item","item-builder-title":"Player","type":"player","option":{"page-item-id":"","title-type":"left","title":"Players","caption":"","right-text":"View All Players","right-text-link":"http://themes.goodlayers.com/realsoccer/player-3-columns","category":"first-team","player-style":"classic","num-fetch":"8","player-size":"4","player-layout":"carousel","player-filter":"disable","thumbnail-size":"round-personnel-size","orderby":"date","order":"desc","pagination":"disable","margin-bottom":"20px"}}],"option":{"page-item-id":"","type":"image","background":"3228","background-mobile":"","background-speed":"0.1","pattern":"1","video":"","video-overlay":"0.5","video-player":"enable","skin":"gdlr-skin-dark-skin","show-section":"gdlr-show-all","border":"none","border-top-color":"#e9e9e9","border-bottom-color":"#e9e9e9","padding-top":"80px","padding-bottom":"00px"}},{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-2","items":[{"item-type":"item","item-builder-title":"Fixtures & Results","type":"fixture-result","option":{"page-item-id":"","title-type":"left","title":"Fixtures & Results","caption":"","right-text":"Read All News","right-text-link":"","category":"first-team-result","style":"summary","button-text":"View All Fixtures","button-link":"http://themes.goodlayers.com/realsoccer/fixtures-results","num-fetch":"10","filter":"disable","order":"desc","pagination":"disable","margin-bottom":"75px"}}],"option":{},"size":"1/3"},{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-2","items":[{"item-type":"item","item-builder-title":"Feature Media","type":"feature-media","option":{"page-item-id":"","title-type":"left","title":"Featured Video","caption":"","type":"video","video-url":"http://vimeo.com/81042264","image":"","image-link":"","feature-media-caption":"Highlight From Last Match","margin-bottom":"20px"}}],"option":{},"size":"2/3"},{"item-type":"item","item-builder-title":"Portfolio","type":"portfolio","option":{"page-item-id":"","title-type":"left","title":"Gallery","caption":"","right-text":"Read All News","right-text-link":"","category":"post-format-gallery","tag":"","portfolio-style":"modern-portfolio","num-fetch":"4","num-excerpt":"20","portfolio-size":"1/4","portfolio-layout":"fitRows","portfolio-filter":"disable","thumbnail-size":"small-grid-size","orderby":"date","order":"desc","pagination":"disable","margin-bottom":"25px"}},{"item-type":"wrapper","item-builder-title":"Color Wrapper","type":"color-wrapper","items":[{"item-type":"item","item-builder-title":"Banner","type":"banner","option":{"page-item-id":"","slider":"[[3236,3235,3234,3233,3232,3230,3231],{|gq2|3230|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-11-150x36.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:36},|gq2|3231|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-21-150x33.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:33},|gq2|3232|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-3-150x37.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:37},|gq2|3233|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-4-150x28.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:28},|gq2|3234|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-5-150x47.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:47},|gq2|3235|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-6-150x38.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:38},|gq2|3236|gq2|:{|gq2|title|gq2|:|gq2||gq2|,|gq2|caption|gq2|:|gq2||gq2|,|gq2|caption-position|gq2|:|gq2||gq2|,|gq2|slide-link|gq2|:|gq2||gq2|,|gq2|url|gq2|:|gq2||gq2|,|gq2|new-tab|gq2|:|gq2|enable|gq2|,|gq2|thumbnail|gq2|:|gq2|http://themes.goodlayers.com/realsoccer/wp-content/uploads/2014/09/banner-7-150x27.png|gq2|,|gq2|width|gq2|:150,|gq2|height|gq2|:27}}]","thumbnail-size":"full","banner-columns":"5","margin-bottom":"20px"}}],"option":{"page-item-id":"","background-type":"color","background":"#f3f3f3","skin":"no-skin","show-section":"gdlr-show-all","border":"none","border-top-color":"#e9e9e9","border-bottom-color":"#e9e9e9","padding-top":"60px","padding-bottom":"20px"}}]',

					'post-option'=>'{"sidebar":"no-sidebar","left-sidebar":"Footer 1","right-sidebar":"Footer 1","page-style":"normal","show-title":"disable","page-caption":"","show-content":"enable","header-background":"","no-header-height":"enable"}'

				),

				'pricing' => array(

					'above-sidebar'=>'[]',

					'below-sidebar'=>'[]',

					'content-with-sidebar'=>'[{"item-type":"wrapper","item-builder-title":"Color Wrapper","type":"color-wrapper","items":[{"item-type":"item","item-builder-title":"Price Table","type":"price-table","option":{"page-item-id":"","price-table":"[{|gq2|gdl-tab-title|gq2|:|gq2|Basic|gq2|,|gq2|gdl-tab-price|gq2|:|gq2|$29.99/mo|gq2|,|gq2|gdl-tab-content|gq2|:|gq2|<ul>|g2n||g2t|<li>30 GB</li>|g2n||g2t|<li>12 Email Accounts</li>|g2n||g2t|<li>50 GB Bandwidth</li>|g2n||g2t|<li>Live Chat Support</li>|g2n||g2t|<li>Enchanced SSL Security</li>|g2n|</ul>|gq2|,|gq2|gdl-tab-active|gq2|:|gq2|no|gq2|,|gq2|gdl-tab-link|gq2|:|gq2|#|gq2|},{|gq2|gdl-tab-title|gq2|:|gq2|Deluxe|gq2|,|gq2|gdl-tab-price|gq2|:|gq2|$39.99/mo|gq2|,|gq2|gdl-tab-content|gq2|:|gq2|<ul>|g2n||g2t|<li>30 GB</li>|g2n||g2t|<li>12 Email Accounts</li>|g2n||g2t|<li>50 GB Bandwidth</li>|g2n||g2t|<li>Live Chat Support</li>|g2n||g2t|<li>Enchanced SSL Security</li>|g2n|</ul>|gq2|,|gq2|gdl-tab-active|gq2|:|gq2|no|gq2|,|gq2|gdl-tab-link|gq2|:|gq2|#|gq2|},{|gq2|gdl-tab-title|gq2|:|gq2|Premium|gq2|,|gq2|gdl-tab-price|gq2|:|gq2|$49.99/mo|gq2|,|gq2|gdl-tab-content|gq2|:|gq2|<ul>|g2n||g2t|<li>30 GB</li>|g2n||g2t|<li>12 Email Accounts</li>|g2n||g2t|<li>50 GB Bandwidth</li>|g2n||g2t|<li>Live Chat Support</li>|g2n||g2t|<li>Enchanced SSL Security</li>|g2n|</ul>|gq2|,|gq2|gdl-tab-active|gq2|:|gq2|yes|gq2|,|gq2|gdl-tab-link|gq2|:|gq2|#|gq2|},{|gq2|gdl-tab-title|gq2|:|gq2|Advance|gq2|,|gq2|gdl-tab-price|gq2|:|gq2|$59.99/mo|gq2|,|gq2|gdl-tab-content|gq2|:|gq2|<ul>|g2n||g2t|<li>30 GB</li>|g2n||g2t|<li>12 Email Accounts</li>|g2n||g2t|<li>50 GB Bandwidth</li>|g2n||g2t|<li>Live Chat Support</li>|g2n||g2t|<li>Enchanced SSL Security</li>|g2n|</ul>|gq2|,|gq2|gdl-tab-active|gq2|:|gq2|no|gq2|,|gq2|gdl-tab-link|gq2|:|gq2|#|gq2|}]","columns":"4","margin-bottom":"50px"}}],"option":{"page-item-id":"","background-type":"","background":"#ffffff","skin":"no-skin","show-section":"","border":"none","border-top-color":"#dddddd","border-bottom-color":"#dddddd","padding-top":"110px","padding-bottom":"40px"}},{"item-type":"wrapper","item-builder-title":"Color Wrapper","type":"color-wrapper","items":[{"item-type":"item","item-builder-title":"Stunning Text","type":"stunning-text","option":{"page-item-id":"","title":"Check Out Special Promotion Here!","caption":"Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Nihil hic munitissimus habendi senatus locus, nihil horum? Vivamus sagittis lacus vel augue laoreet rutrum faucibus.","button-text":"Buy Now","button-link":"#","style":"center","margin-bottom":"20px"}}],"option":{"page-item-id":"","background-type":"color","background":"#f3f3f3","skin":"no-skin","show-section":"gdlr-show-all","border":"none","border-top-color":"#dddddd","border-bottom-color":"#dddddd","padding-top":"70px","padding-bottom":"30px"}}]',

					'post-option'=>'{"sidebar":"no-sidebar","left-sidebar":"blog","right-sidebar":"blog","page-style":"normal","show-title":"enable","page-caption":"Example Of Pricing Table","show-content":"disable","header-background":"1213","header-style":"default"}'

				),

				'contact-1' => array(

					'above-sidebar'=>'[{"item-type":"wrapper","item-builder-title":"Full Size Wrapper","type":"full-size-wrapper","items":[{"item-type":"item","item-builder-title":"Content","type":"content","option":{"page-item-id":"","title-type":"none","title":"","caption":"","right-text":"Read All News","right-text-link":"","content":"<p>[put_wpgm id=1]</p>","margin-bottom":"0px"}}],"option":{"page-item-id":"","background":"#ffffff","show-section":"gdlr-show-all","border":"none","border-top-color":"#dddddd","border-bottom-color":"#dddddd","padding-top":"0px","padding-bottom":"0px"}}]',

					'below-sidebar'=>'[{"item-type":"wrapper","item-builder-title":"Background/Parallax Wrapper","type":"parallax-bg-wrapper","items":[{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-2","items":[{"item-type":"item","item-builder-title":"Box Icon","type":"box-icon-item","option":{"page-item-id":"","icon":"icon-envelope","icon-position":"top","icon-type":"circle","icon-color":"#ffffff","icon-background":"#aa4243","title":"Contact By Email","content":"<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>","margin-bottom":"20px"}}],"option":{},"size":"1/3"},{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-2","items":[{"item-type":"item","item-builder-title":"Box Icon","type":"box-icon-item","option":{"page-item-id":"","icon":"icon-phone-sign","icon-position":"top","icon-type":"circle","icon-color":"#ffffff","icon-background":"#aa4243","title":"Contact By Phone","content":"<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>","margin-bottom":"20px"}}],"option":{},"size":"1/3"},{"item-type":"wrapper","item-builder-title":"Column Item","type":"column1-3","items":[{"item-type":"item","item-builder-title":"Box Icon","type":"box-icon-item","option":{"page-item-id":"","icon":"icon-home","icon-position":"top","icon-type":"circle","icon-color":"#ffffff","icon-background":"#aa4243","title":"Come To See Us","content":"<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>","margin-bottom":"20px"}}],"option":{},"size":"1/3"}],"option":{"page-item-id":"","type":"image","background":"3228","background-mobile":"","background-speed":"0.2","pattern":"1","video":"","video-overlay":"0.5","video-player":"enable","skin":"no-skin","show-section":"gdlr-show-all","border":"none","border-top-color":"#dddddd","border-bottom-color":"#dddddd","padding-top":"100px","padding-bottom":"50px"}}]',

					'content-with-sidebar'=>'[{"item-type":"item","item-builder-title":"Content","type":"content","option":{"page-item-id":"","title-type":"none","title":"","caption":"","right-text":"Read All News","right-text-link":"","content":"<p>[gdlr_space height=|gq2|-22px|gq2|] [gdlr_heading tag=|gq2|h5|gq2| font_weight=|gq2|bold|gq2| ]Talk to us![/gdlr_heading] [gdlr_space height=|gq2|45px|gq2|] [contact-form-7 id=|gq2|4|gq2| title=|gq2|Contact form 1|gq2|]</p>","margin-bottom":"60px"}}]',

					'post-option'=>'{"sidebar":"right-sidebar","left-sidebar":"Footer 1","right-sidebar":"contact","page-style":"normal","show-title":"enable","page-caption":"","show-content":"enable","header-background":"","header-style":"solid"}'

				),				

			);



			$loaded_data = $default_data[$_POST['slug']];

			foreach( $loaded_data as $meta_key => $meta_value ){

				update_post_meta($_POST['post_id'], $meta_key, $meta_value);

			}

		}

	}

?>