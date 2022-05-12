<?php
 $agency_starter_title = get_theme_mod('hero_title', '');
 $agency_starter_description = get_theme_mod('hero_description', '');
 $agency_starter_button_text = get_theme_mod('hero_button', '');
 $agency_starter_link = get_theme_mod('hero_link', '');
 if($agency_starter_title != "" || $agency_starter_description != ""){
?>
<div id="header-hero-section">
	 <div class="hero-callout">

		<?php if($agency_starter_title !=''): ?>
		<h2 class="callout-title"><?php echo esc_html( $agency_starter_title  ); ?></h2>
		<?php endif; ?>
		
		<?php if($agency_starter_description!=''): ?>
		<div class="callout-section-desc "><?php echo esc_html( $agency_starter_description  ); ?></div>
		<?php endif; ?> 
			
		<?php if($agency_starter_link !='' || $agency_starter_button_text !=''): ?>
	
		<a href="<?php echo esc_url( $agency_starter_link ); ?>"><span class="call-to-action" ><?php echo esc_html($agency_starter_button_text); ?></span></a>
		
		<?php endif; ?>
	</div>
</div>

<?php }