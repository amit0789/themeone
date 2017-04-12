 <?php
  // filter 'post_class' and add our own classes to the article tag for single posts
  // viz. hmd-item, hmd-product

function _amit_theme_location(){
// will contain code for displaying location
  $locality= get_post_meta('$post_id','amit_theme_locality',true);
  $region= get_post_meta('$post_id','amit_theme_region',true);
	
       <address itemprop="location" itemscope itemtype="http://schema.org/Place">
		<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		<i class="fa fa-map-marker" aria-hidden="true"></i>
		<span class="locality" itemprop="addressLocality">Dadar</span>
		<span class="region" itemprop="addressRegion">Mumbai</span>
		</p>
	</address>

}

// enqueue fontawesome from CDN
function amit_theme_enqueue_fa(){
wp_register_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
wp_enqueue_style('fontawesome');    
}

wp_enqueue_script('fontawesome');

// will contain code to display meta box on the backend
// will contain code to process and save location meta