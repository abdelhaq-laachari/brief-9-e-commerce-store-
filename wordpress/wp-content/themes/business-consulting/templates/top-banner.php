<?php 
$business_consulting_banner = get_theme_mod('banner_image', '');
if($business_consulting_banner !='') { 

?>
<section id="top-banner">
	<div class="center-text">
		<?php 
			echo '<a href="'.esc_url(get_theme_mod('banner_link', '#')).'" ><img src="'.esc_url($business_consulting_banner).'" /></a>';	
		?>
	</div>
</section>

<?php
} 

