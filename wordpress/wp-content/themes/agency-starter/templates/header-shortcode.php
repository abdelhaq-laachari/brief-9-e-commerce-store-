<?php 
$agency_starter_shortcode = get_theme_mod('header_shortcode', '');
if($agency_starter_shortcode !='') { 

?>
<section id="booking-shortcode">
	<div class="center-text">
		<?php 
			echo do_shortcode( wp_kses_post($agency_starter_shortcode) );	
		?>
	</div>
</section>

<?php
} 

