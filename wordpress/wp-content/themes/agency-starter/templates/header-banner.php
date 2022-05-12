<?php 
$agency_starter_banner = get_theme_mod('banner_image', '');
if($agency_starter_banner !='') {
?>
<section id="top-banner" style="text-align:center">
	<div class="center-text" >
		<?php 
			echo '<a href="'.esc_url(get_theme_mod('banner_link', '#')).'" ><img src="'.esc_url($agency_starter_banner).'" /></a>';	
		?>
	</div>
</section>
<?php
} 

