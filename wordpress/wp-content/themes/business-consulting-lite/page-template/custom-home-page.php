<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_theme_mod('business_consulting_lite_slider_arrows') != ''){ ?>
    <section id="slider">
      <span class="design-right"></span>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'business_consulting_lite_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $business_consulting_lite_slide_post[] = $mod;
            }
          }
           if( !empty($business_consulting_lite_slide_post) ) :
          $args = array(
            'post_type' =>array('post'),
            'post__in' => $business_consulting_lite_slide_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
            <div class="carousel-caption text-center">
              <h2 class="slider-title"><?php the_title();?></h2>
              <p class="mb-0"><?php echo esc_html(wp_trim_words(get_the_content(),'20') );?></p>
              <div class="home-btn text-center my-4">
                <a class="py-3 px-4" href="<?php the_permalink(); ?>"><?php echo esc_html('READ MORE','business-consulting-lite'); ?><i class="fas fa-chevron-right ml-3"></i></a>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <section id="skill" class="py-5 text-center">
    <div class="container">
      <?php if( get_theme_mod('business_consulting_lite_skill_title') != '' ){ ?>
        <h3 class="mb-4"><?php echo esc_html(get_theme_mod('business_consulting_lite_skill_title','')); ?></h3>
      <?php }?>
      <?php if( get_theme_mod('business_consulting_lite_skill_btn_text') != ''){ ?>
        <p><?php echo esc_html(get_theme_mod('business_consulting_lite_skill_btn_text','')); ?></p>
      <?php }?>
      <div class="row pt-5">
        <?php $skill = get_theme_mod('business_consulting_lite_skill_increament');
        for ($i=1; $i <= $skill; $i++) { ?>
          <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="skill-box mb-5 text-center">
              <div class="skill-icon">
                <?php if( get_theme_mod('business_consulting_lite_skill_box_icon'.$i) != '' ){ ?>
                  <i class="<?php echo esc_html(get_theme_mod('business_consulting_lite_skill_box_icon'.$i)); ?>"></i>
                <?php }?>
              </div>
              <?php if( get_theme_mod('business_consulting_lite_skill_box_number'.$i) != '' ){ ?>
                <h4 class="mt-3"><?php echo esc_html(get_theme_mod('business_consulting_lite_skill_box_number'.$i)); ?></h4>
              <?php }?>
              <?php if( get_theme_mod('business_consulting_lite_skill_box_title'.$i) != '' ){ ?>
                <p><?php echo esc_html(get_theme_mod('business_consulting_lite_skill_box_title'.$i)); ?></p>
              <?php }?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  
</main>

<?php get_footer(); ?>